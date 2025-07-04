<?php

namespace App\Models;

use App\Models\Scopes\LeaveRosterScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;

#[ScopedBy([LeaveRosterScope::class])]
class LeaveRoster extends Model
{
    // Specify the primary key
    protected $primaryKey = 'leave_roster_id';

    // Indicate that the primary key is not an auto-incrementing integer
    public $incrementing = false;

    // Specify the type of the primary key
    protected $keyType = 'string';

    // The attributes that are mass assignable
    protected $fillable = [
        'leave_roster_id',
        'employee_id',
        'start_date',
        'end_date',
        'leave_title',
        'rejection_reason',
    ];

    // If you want to use casts for certain attributes
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function getRouteKeyName()
    {
        return 'leave_roster_id';
    }

    // Model boot method
    protected static function boot()
    {
        parent::boot();

        // Automatically generate a UUID for the primary key when creating a new leave roster
        static::creating(function ($leaveRoster) {
            $leaveRoster->leave_roster_id = (string) Str::uuid();
        });
    }

    // A leave roster belongs to an employee
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id')->withoutGlobalScopes();
    }

    // A leave roster belongs to 0 or 1 leave
    public function leave()
    {
        return $this->belongsTo(Leave::class, 'leave_roster_id', 'leave_roster_id')->withDefault();
    }

    public function durationForLeave()
    {
        //exclude all weekends and public holidays
        $publicHolidays = PublicHoliday::pluck('holiday_date')->toArray();

        $publicHolidays = array_map(function ($date) {
            return Carbon::parse($date)->toDateString();
        }, $publicHolidays);

        return Carbon::parse($this->start_date)
            ->diffInDaysFiltered(function (Carbon $date) use ($publicHolidays) {
                return !$date->isWeekend() && !in_array($date->toDateString(), $publicHolidays);
            }, Carbon::parse($this->end_date));
    }
}
