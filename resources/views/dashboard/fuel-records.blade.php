<x-app-layout>
    <div class="container py-4">
        <h1 class="mb-4">Fuel Records</h1>
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                <strong>Fuel Usage - June 2025</strong>
                <div>
                    <button class="btn btn-light btn-sm">Add Fuel Record</button>
                    <button class="btn btn-outline-light btn-sm ms-2">Export Records</button>
                </div>
            </div>
            
            <div class="card-body">
                <div class="row g-4">
                    <!-- Record 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-success">
                            <div class="card-header bg-light d-flex justify-content-between">
                                <span class="badge bg-success">#1</span>
                                <span class="text-muted">2025-06-05</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="bg-success bg-opacity-25 p-2 rounded me-3">
                                        <i class="bi bi-truck fs-4 text-success"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-0">Excavator 01</h5>
                                        <p class="card-text text-muted mb-0">Paul Okello</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-between border-top pt-3">
                                    <div>
                                        <small class="text-muted">Litres</small>
                                        <p class="mb-0 fw-bold">120</p>
                                    </div>
                                    <div>
                                        <small class="text-muted">Cost</small>
                                        <p class="mb-0 fw-bold">UGX 720,000</p>
                                    </div>
                                    <div>
                                        <small class="text-muted">Purpose</small>
                                        <p class="mb-0 fw-bold">Site Work</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Record 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-success">
                            <div class="card-header bg-light d-flex justify-content-between">
                                <span class="badge bg-success">#2</span>
                                <span class="text-muted">2025-06-12</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="bg-success bg-opacity-25 p-2 rounded me-3">
                                        <i class="bi bi-truck fs-4 text-success"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-0">Pick-up Truck</h5>
                                        <p class="card-text text-muted mb-0">Mary Atieno</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-between border-top pt-3">
                                    <div>
                                        <small class="text-muted">Litres</small>
                                        <p class="mb-0 fw-bold">60</p>
                                    </div>
                                    <div>
                                        <small class="text-muted">Cost</small>
                                        <p class="mb-0 fw-bold">UGX 360,000</p>
                                    </div>
                                    <div>
                                        <small class="text-muted">Purpose</small>
                                        <p class="mb-0 fw-bold">Material Delivery</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Record 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-success">
                            <div class="card-header bg-light d-flex justify-content-between">
                                <span class="badge bg-success">#3</span>
                                <span class="text-muted">2025-06-20</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="bg-success bg-opacity-25 p-2 rounded me-3">
                                        <i class="bi bi-train-freight-front fs-4 text-success"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-0">Locomotive 02</h5>
                                        <p class="card-text text-muted mb-0">John Smith</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-between border-top pt-3">
                                    <div>
                                        <small class="text-muted">Litres</small>
                                        <p class="mb-0 fw-bold">200</p>
                                    </div>
                                    <div>
                                        <small class="text-muted">Cost</small>
                                        <p class="mb-0 fw-bold">UGX 1,200,000</p>
                                    </div>
                                    <div>
                                        <small class="text-muted">Purpose</small>
                                        <p class="mb-0 fw-bold">Transport</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-success">Add New Record</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>