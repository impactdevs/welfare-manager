<x-app-layout>
    <div class="container py-4">
        <h1 class="mb-4">Excavator Records</h1>
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <strong>Excavator Usage - June 2025</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Excavator</th>
                                <th>Operator</th>
                                <th>Hours Used</th>
                                <th>Fuel Consumed (L)</th>
                                <th>Site</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>EXC-01</td>
                                <td>Paul Okello</td>
                                <td>40</td>
                                <td>320</td>
                                <td>Site A</td>
                                <td><span class="badge bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>EXC-02</td>
                                <td>Jane Doe</td>
                                <td>25</td>
                                <td>200</td>
                                <td>Site B</td>
                                <td><span class="badge bg-secondary">Idle</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>EXC-03</td>
                                <td>John Smith</td>
                                <td>30</td>
                                <td>240</td>
                                <td>Site C</td>
                                <td><span class="badge bg-success">Active</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success">Add Excavator Record</button>
                    <button class="btn btn-outline-secondary ms-2">Export Records</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
