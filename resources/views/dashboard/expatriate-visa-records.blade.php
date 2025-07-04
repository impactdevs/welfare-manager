<x-app-layout>
    <div class="container py-4">
        <h1 class="mb-4">Expatriate Visa Records</h1>
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <strong>Visa Records - 2025</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Nationality</th>
                                <th>Visa Type</th>
                                <th>Issued</th>
                                <th>Expiry</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Anna Müller</td>
                                <td>German</td>
                                <td>Work</td>
                                <td>2025-01-15</td>
                                <td>2026-01-14</td>
                                <td><span class="badge bg-success">Valid</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Li Wei</td>
                                <td>Chinese</td>
                                <td>Business</td>
                                <td>2024-09-01</td>
                                <td>2025-08-31</td>
                                <td><span class="badge bg-warning text-dark">Expiring Soon</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>John Smith</td>
                                <td>British</td>
                                <td>Work</td>
                                <td>2023-07-10</td>
                                <td>2024-07-09</td>
                                <td><span class="badge bg-danger">Expired</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success">Add Visa Record</button>
                    <button class="btn btn-outline-secondary ms-2">Export Records</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
