<!DOCTYPE html>
<html>

<head>
    <title>{{ $employee->first_name }} {{ $employee->last_name }} - Employee Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .header-section {
            border-bottom: 2px solid #333;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 2px solid #ddd;
        }

        .section {
            margin-bottom: 25px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .section-title {
            color: #2c3e50;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .row {
            display: flex;
            margin-bottom: 10px;
        }

        .col-4 {
            width: 33%;
            font-weight: bold;
            color: #34495e;
        }

        .col-8 {
            width: 67%;
            color: #7f8c8d;
        }

        .document-list {
            margin-left: 20px;
        }

        .text-muted {
            color: #95a5a6;
        }
    </style>
</head>

<body>
    <div class="header-section">
        <div class="profile-header">
            <div>
                <h1>{{ $employee->title }} {{ $employee->first_name }} {{ $employee->last_name }}</h1>
                <p class="text-muted">
                    Remaining with {{ $employee->retirementYearsRemaining() }} years to retirement
                </p>
            </div>
            @if ($employee->passport_photo)
                <img src="{{ public_path('storage/' . $employee->passport_photo) }}" class="profile-photo"
                    alt="Passport Photo">
            @else
                <div class="text-muted">No passport photo available</div>
            @endif
        </div>

        <div class="row">
            <div class="col-4">Staff ID:</div>
            <div class="col-8">{{ $employee->staff_id ?? 'N/A' }}</div>
        </div>
        <div class="row">
            <div class="col-4">Date of Entry:</div>
            @if ($employee->date_of_entry)
                <div class="col-8">{{ $employee->date_of_entry->format('d M Y') ?? 'N/A' }}</div>
            @else
                <div class="col-8">N/A</div>
            @endif
        </div>
    </div>

    <!-- Basic Information Section -->
    <div class="section">
        <h3 class="section-title">Basic Information</h3>
        <div class="row">
            <div class="col-4">Position:</div>
            <div class="col-8">{{ $employee->position->position_name ?? 'N/A' }}</div>
        </div>
        <div class="row">
            <div class="col-4">Department:</div>
            <div class="col-8">{{ $employee->department->department_name ?? 'N/A' }}</div>
        </div>
        <div class="row">
            <div class="col-4">NIN Number:</div>
            <div class="col-8">{{ $employee->nin ?? 'N/A' }}</div>
        </div>
        <div class="row">
            <div class="col-4">Contract Expiry:</div>
            @if ($employee->contract_expiry_date)
            <div class="col-8">{{ $employee->contract_expiry_date->format('d M Y') ?? 'N/A' }}</div>
            @else
            <div class="col-8">N/A</div>
            @endif
        </div>
    </div>

    <!-- Contact Information Section -->
    <div class="section">
        <h3 class="section-title">Contact Information</h3>
        <div class="row">
            <div class="col-4">Mobile Number:</div>
            <div class="col-8">{{ $employee->phone_number ?? 'N/A' }}</div>
        </div>
        <div class="row">
            <div class="col-4">Email:</div>
            <div class="col-8">{{ $employee->email ?? 'N/A' }}</div>
        </div>
        <div class="row">
            <div class="col-4">Next of Kin:</div>
            <div class="col-8">{{ $employee->next_of_kin ?? 'N/A' }}</div>
        </div>
    </div>

    <!-- Documents Section -->
    <div class="section">
        <h3 class="section-title">Documents</h3>
        <div class="row">
            <div class="col-4">Contract Documents:</div>
            <div class="col-8">
                @if ($employee->contract_documents)
                    <ul class="document-list">
                        @foreach ($employee->contract_documents as $document)
                            <li>{{ $document['title'] }}</li>
                        @endforeach
                    </ul>
                @else
                    <span class="text-muted">No contract documents</span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-4">Qualifications:</div>
            <div class="col-8">
                @if ($employee->qualifications_details)
                    <ul class="document-list">
                        @foreach ($employee->qualifications_details as $qualification)
                            <li>{{ $qualification['title'] }}</li>
                        @endforeach
                    </ul>
                @else
                    <span class="text-muted">No qualifications listed</span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-4">National ID:</div>
            <div class="col-8">
                @if ($employee->national_id_photo)
                    <img src="{{ public_path('storage/' . $employee->national_id_photo) }}"
                        style="max-width: 200px; border: 1px solid #ddd; padding: 5px;">
                @else
                    <span class="text-muted">No national ID provided</span>
                @endif
            </div>
        </div>
    </div>

    <!-- Additional Information Section -->
    <div class="section">
        <h3 class="section-title">Additional Information</h3>
        <div class="row">
            <div class="col-4">Job Description:</div>
            <div class="col-8">{{ $employee->job_description ?? 'No job description available' }}</div>
        </div>
    </div>
</body>

</html>
