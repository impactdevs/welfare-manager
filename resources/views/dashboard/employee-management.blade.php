<x-app-layout>
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <strong>Employee List - July 2025</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jane Doe</td>
                                <td>Accountant</td>
                                <td>jane.doe@example.com</td>
                                <td>+256 700 123456</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-info">View</button>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>John Smith</td>
                                <td>HR Officer</td>
                                <td>john.smith@example.com</td>
                                <td>+256 701 654321</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-info">View</button>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mary Atieno</td>
                                <td>IT Support</td>
                                <td>mary.atieno@example.com</td>
                                <td>+256 702 987654</td>
                                <td><span class="badge bg-secondary">On Leave</span></td>
                                <td>
                                    <button class="btn btn-sm btn-info">View</button>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success">Add New Employee</button>
                    <button class="btn btn-outline-secondary ms-2">Export Employees</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
