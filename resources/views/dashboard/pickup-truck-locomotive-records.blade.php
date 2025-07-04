<x-app-layout>
    <div class="container py-4">
        <h1 class="mb-4">Pick-up Truck & Locomotive Records</h1>
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <strong>Vehicle Usage - June 2025</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Vehicle</th>
                                <th>Driver</th>
                                <th>Kilometers</th>
                                <th>Fuel Used (L)</th>
                                <th>Trips</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Pick-up Truck 01</td>
                                <td>Mary Atieno</td>
                                <td>1,200</td>
                                <td>100</td>
                                <td>15</td>
                                <td><span class="badge bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Locomotive 02</td>
                                <td>John Smith</td>
                                <td>2,500</td>
                                <td>200</td>
                                <td>8</td>
                                <td><span class="badge bg-secondary">Idle</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Pick-up Truck 03</td>
                                <td>Paul Okello</td>
                                <td>900</td>
                                <td>80</td>
                                <td>10</td>
                                <td><span class="badge bg-success">Active</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success">Add Vehicle Record</button>
                    <button class="btn btn-outline-secondary ms-2">Export Records</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
