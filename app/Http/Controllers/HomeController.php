<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Appraisal;
use App\Models\Attendance;
use App\Models\Contract;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\LeaveType;
use App\Models\Scopes\EmployeeScope;
use App\Models\Training;
use Carbon\Carbon;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    public function index()
    {

        $today = Carbon::today();
        $yesterday = Carbon::yesterday();
        $tomorrow = Carbon::tomorrow();
        $hours = [];
        $todayCounts = [];
        $yesterdayCounts = [];
        $lateCounts = [];
        $allocatedLeaveDays = [];

        $employee = auth()->user()->employee; // Assuming you have a relationship set up

        $appraisals = Appraisal::count();

        $pendingAppraisals = Appraisal::whereNull('appraisal_request_status->HR')
            ->count();

        $ongoingAppraisals = Appraisal::whereJsonContains('appraisal_request_status', ['HR' => 'approved'])
            ->whereNull('appraisal_request_status->Executive Secretary')
            ->count();


        $completeAppraisals = Appraisal::whereJsonContains('appraisal_request_status', ['HR' => 'approved'])
            ->whereJsonContains('appraisal_request_status', ['Executive Secretary' => 'approved'])
            ->count();
        // contracts
        $contracts = Contract::whereTodayOrAfter('end_date')->get();

        $runningContracts = Contract::where('end_date', '>=', Carbon::today())->count();

        $expiredContracts = Contract::where('end_date', '<', Carbon::today())->count();

        $leaveTypes = LeaveType::all()->keyBy('leave_type_id');

        // //ongoing appraisals
        // $ongoingAppraisals = Appraisal::where('employee_id', optional(auth()->user()->employee)->employee_id)->count();


        $isAdmin = auth()->user()->isAdminOrSecretary;


        //events and trainings
        $events = Event::where(function ($query) use ($today, $tomorrow) {
            $query->whereBetween('event_start_date', [$today, $tomorrow])
                ->orWhere(function ($q) {
                    $q->where('event_start_date', '<', now())
                        ->where('event_end_date', '>', now());
                });
        })->get();

        $trainings = Training::where(function ($query) use ($today, $tomorrow) {
            $query->whereBetween('training_start_date', [$today, $tomorrow])
                ->orWhere(function ($q) {
                    $q->where('training_start_date', '<', now())
                        ->where('training_end_date', '>', now());
                });
        })->get();



        // Fetch leave requests where end date is greater than today
        $leaveRequests = Leave::where('end_date', '>', $today)->get();
        //number of employees
        $number_of_employees = Employee::count();
        $attendances = Attendance::whereDate('attendance_date', $today)->count();
        $available_leave = Leave::count();
        //count the number of clockins per hour
        $clockInCounts = DB::table('attendances')
            ->select(DB::raw('HOUR(clock_in) as hour'), DB::raw('count(*) as count'))
            ->whereDate('attendance_date', $today)
            ->groupBy('hour')
            ->orderBy('hour')
            ->get();
        // Query to count clock-ins per hour for yesterday
        $yesterdayClockInCounts = DB::table('attendances')
            ->select(DB::raw('HOUR(clock_in) as hour'), DB::raw('count(*) as count'))
            ->whereDate('attendance_date', $yesterday)
            ->groupBy('hour')
            ->orderBy('hour')
            ->get();

        // Query for late arrivals (e.g., after 9 AM)
        $lateArrivalCounts = DB::table('attendances')
            ->select(DB::raw('HOUR(clock_in) as hour'), DB::raw('count(*) as count'))
            ->whereDate('attendance_date', $today)
            ->where('clock_in', '>', Carbon::today()->setHour(9))
            ->groupBy('hour')
            ->orderBy('hour')
            ->get();
        // Initialize counts for each hour (0-23)
        for ($i = 0; $i < 24; $i++) {
            $hours[] = Carbon::today()->setHour($i)->toISOString();
            $todayCounts[] = 0;
            $yesterdayCounts[] = 0;
            $lateCounts[] = 0;
        }

        // Populate today's counts
        foreach ($clockInCounts as $record) {
            $todayCounts[$record->hour] = $record->count;
        }

        // Populate yesterday's counts
        foreach ($yesterdayClockInCounts as $record) {
            $yesterdayCounts[$record->hour] = $record->count;
        }

        // Populate late arrival counts
        foreach ($lateArrivalCounts as $record) {
            $lateCounts[$record->hour] = $record->count;
        }

        // Assuming you already have $leaveRequests
        $allocatedLeaveDays = [];

        foreach ($leaveRequests as $leave) {
            $startDate = Carbon::parse($leave->start_date);
            $endDate = Carbon::parse($leave->end_date);
            $leaveTypeId = $leave->leave_type_id;

            $daysAllocated = $startDate->diffInDays($endDate) + 1;

            if (!isset($allocatedLeaveDays[$leaveTypeId])) {
                $allocatedLeaveDays[$leaveTypeId] = 0;
            }
            $allocatedLeaveDays[$leaveTypeId] += $daysAllocated;
        }

        // Prepare data for ECharts
        $chartData = [];
        foreach ($leaveTypes as $leaveType) {
            $chartData[] = $allocatedLeaveDays[$leaveType->leave_type_id] ?? 0;
        }

        // Convert to JSON for JavaScript
        $chartDataJson = json_encode($chartData);
        $leaveTypesJson = json_encode($leaveTypes->pluck('leave_type_name')->toArray());


        // Get the number of employees per department with department names
        $employeeCounts = DB::table('employees')
            ->join('departments', 'employees.department_id', '=', 'departments.department_id')
            ->select('departments.department_name', DB::raw('count(*) as total'))
            ->groupBy('departments.department_name')
            ->get();

        // Prepare data for ECharts
        $chartEmployeeData = [];
        foreach ($employeeCounts as $count) {
            $chartEmployeeData[] = [
                'value' => $count->total,
                'name' => $count->department_name, // Use department name here
            ];
        }

        // Convert to JSON for JavaScript
        $chartEmployeeDataJson = json_encode($chartEmployeeData);

        //applications
        $entries = Application::latest()->take(5)
            ->get();

        $appraisals = Appraisal::latest()
            ->take(5)
            ->get();






        //get the current leave requests
        $leaves = Leave::with('employee', 'leaveCategory')
            ->where('end_date', '>=', Carbon::today())
            ->where('user_id', auth()->user()->id)
            ->get();

        $totalLeaves = $leaves->count();
        $totalDays = $leaves->sum(function ($leave) {
            return Carbon::parse($leave->start_date)->diffInDays(Carbon::parse($leave->end_date)) + 1;
        });
        $leavesPerCategory = $leaves->groupBy('leaveCategory.leave_type_name')->map->count();

        // Prepare leave approval progress data
        $leaveApprovalData = [];
        foreach ($leaves as $leave) {
            if ((($leave->leave_request_status != 'rejected') || ($leave->remainingLeaveDays() >= 0)) && (!$leave->is_cancelled)) {
                $progress = 0;
                $status = '';

                // Determine the approval status and progress
                if ($leave->leave_request_status === 'approved') {
                    $progress = 100;
                    $status = 'Approved';
                } elseif ($leave->leave_request_status === 'rejected') {
                    $progress = 0;
                    $status = 'Rejected';
                } else {
                    // Count stages based on status
                    if ($leave->leave_request_status["HR"] ?? "" === 'approved') {
                        $progress += 33;
                        $status = 'Awaiting HOD Approval';
                    }
                    if ($leave->leave_request_status["Head of Division"] ?? "" === 'approved') {
                        $progress += 33;
                        $status = 'Awaiting Executive Secretary Approval';
                    }
                    if ($leave->leave_request_status["Executive Secretary"] ?? "" === 'approved') {
                        $progress += 34;
                        $status = 'Your Leave request has been granted';
                    }
                }
                $leaveApprovalData[] = [
                    'leave' => $leave,
                    'daysRemaining' => $leave->remainingLeaveDays(),
                    'progress' => $progress,
                    'start_date' => $leave->start_date->format('Y-m-d'),
                    'end_date' => $leave->end_date->format('Y-m-d'),
                    'is_cancelled' => $leave->is_cancelled,
                    'status' => $status,
                    'hrStatus' => $leave->leave_request_status["HR"] ?? "" === 'approved' ? 'Approved' : 'Pending',
                    'hodStatus' => $leave->leave_request_status["Head of Division"] ?? "" === 'approved' ? 'Apprroved' : 'Pending',
                    'esStatus' => $leave->leave_request_status["Executive Secretary"] ?? "" === 'approved' ? 'Approved' : 'Pending',
                ];
            }
        }

        //birthdays
        $todayBirthdays = Employee::withoutGlobalScope(EmployeeScope::class)->whereMonth('date_of_birth', Carbon::today()->month)
            ->whereDay('date_of_birth', Carbon::today()->day)
            ->get();

        $user = User::find(auth()->id());
        $notifications = $user->unreadNotifications()->latest()->take(10)->get();

        return view('dashboard.index', compact('number_of_employees', 'notifications', 'contracts', 'runningContracts', 'expiredContracts', 'attendances', 'available_leave', 'hours', 'todayCounts', 'yesterdayCounts', 'lateCounts', 'chartDataJson', 'leaveTypesJson', 'chartEmployeeDataJson', 'events', 'trainings', 'entries', 'appraisals', 'leaveApprovalData', 'totalLeaves', 'totalDays', 'todayBirthdays', 'isAdmin', 'completeAppraisals', 'ongoingAppraisals', 'pendingAppraisals'));
    }

    public function agree()
    {
        // Store the agreement in the user's profile or session
        $user = auth()->user();
        $user->agreed_to_data_usage = true;
        $user->save();
        return redirect()->back()->with('success', 'Thank you for agreeing to data usage.');
    }
}
