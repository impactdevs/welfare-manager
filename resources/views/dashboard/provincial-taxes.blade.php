<x-app-layout>
    <div class="container py-4">
        <h1 class="mb-4">Provincial Taxes</h1>
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <strong>Provincial Tax Summary - 2025</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Province</th>
                                <th>Tax Type</th>
                                <th>Period</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Central</td>
                                <td>Property Tax</td>
                                <td>2025</td>
                                <td>UGX 1,200,000</td>
                                <td><span class="badge bg-success">Paid</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eastern</td>
                                <td>Business Tax</td>
                                <td>2025</td>
                                <td>UGX 950,000</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Northern</td>
                                <td>Property Tax</td>
                                <td>2025</td>
                                <td>UGX 800,000</td>
                                <td><span class="badge bg-success">Paid</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success">Add Provincial Tax</button>
                    <button class="btn btn-outline-secondary ms-2">Export Tax Data</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
