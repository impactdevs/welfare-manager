<x-app-layout>
    <div class="container py-4">
        <h1 class="mb-4">Travel Expenses</h1>
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <strong>Travel Expenses - June 2025</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Employee</th>
                                <th>Destination</th>
                                <th>Date</th>
                                <th>Purpose</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jane Doe</td>
                                <td>Kampala</td>
                                <td>2025-06-03</td>
                                <td>Conference</td>
                                <td>UGX 500,000</td>
                                <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Paul Okello</td>
                                <td>Entebbe</td>
                                <td>2025-06-12</td>
                                <td>Training</td>
                                <td>UGX 350,000</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mary Atieno</td>
                                <td>Jinja</td>
                                <td>2025-06-20</td>
                                <td>Client Visit</td>
                                <td>UGX 420,000</td>
                                <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success">Add Expense</button>
                    <button class="btn btn-outline-secondary ms-2">Export Expenses</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
