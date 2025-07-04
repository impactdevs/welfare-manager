<x-app-layout>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card border-0 shadow-lg rounded-5">
                    <div class="card-header bg-success text-white text-center rounded-top-5">
                        <h2 class="mb-0">Purchased Spares</h2>
                        <span class="badge bg-light text-success mt-2">Updated: July 2025</span>
                    </div>
                    <div class="card-body bg-light rounded-bottom-5">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="bg-success text-white rounded-4 p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                    <i class="bi bi-bag-check display-4 mb-2"></i>
                                    <h4>3 New Spares</h4>
                                    <small>Added this month</small>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover align-middle mb-0">
                                        <thead class="bg-success text-white">
                                            <tr>
                                                <th>#</th>
                                                <th>Item Name</th>
                                                <th>Supplier</th>
                                                <th>Date</th>
                                                <th>Qty</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Hydraulic Pump</td>
                                                <td>ABC Supplies</td>
                                                <td>2025-06-10</td>
                                                <td>2</td>
                                                <td>UGX 2,400,000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Engine Oil</td>
                                                <td>Oil Masters</td>
                                                <td>2025-06-15</td>
                                                <td>10</td>
                                                <td>UGX 800,000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Brake Pads</td>
                                                <td>SpareParts Ltd</td>
                                                <td>2025-06-18</td>
                                                <td>4</td>
                                                <td>UGX 600,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3 text-end">
                                    <button class="btn btn-success">Add Spare</button>
                                    <button class="btn btn-outline-success ms-2">Export</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
