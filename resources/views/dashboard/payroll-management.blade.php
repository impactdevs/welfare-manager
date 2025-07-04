<x-app-layout>
    <div class="container py-5">
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center py-3">
                        <h5 class="mb-0 fw-bold">Payroll Summary - June 2025</h5>
                        <button class="btn btn-light btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addPayrollModal">
                            <i class="bi bi-plus-circle me-2"></i> Add Payroll Record
                        </button>
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle" id="payrollTable">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Employee Name</th>
                                        <th>Position</th>
                                        <th>Gross Salary</th>
                                        <th>Deductions</th>
                                        <th>Net Pay</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="payrollTableBody">
                                    <tr>
                                        <td>1</td>
                                        <td>Jane Doe</td>
                                        <td>Accountant</td>
                                        <td>UGX 3,500,000</td>
                                        <td>UGX 350,000</td>
                                        <td>UGX 3,150,000</td>
                                        <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>John Smith</td>
                                        <td>HR Officer</td>
                                        <td>UGX 2,800,000</td>
                                        <td>UGX 280,000</td>
                                        <td>UGX 2,520,000</td>
                                        <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Mary Atieno</td>
                                        <td>IT Support</td>
                                        <td>UGX 2,200,000</td>
                                        <td>UGX 220,000</td>
                                        <td>UGX 1,980,000</td>
                                        <td><span class="badge bg-warning-subtle text-warning-emphasis">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Paul Okello</td>
                                        <td>Driver</td>
                                        <td>UGX 1,500,000</td>
                                        <td>UGX 150,000</td>
                                        <td>UGX 1,350,000</td>
                                        <td><span class="badge bg-success-subtle text-success">Paid</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn btn-success me-3">
                                <i class="bi bi-download me-2"></i> Export Payroll
                            </button>
                            <button class="btn btn-outline-secondary">
                                <i class="bi bi-people-fill me-2"></i> View All Employees
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addPayrollModal" tabindex="-1" aria-labelledby="addPayrollModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-lg shadow-lg">
                <div class="modal-header bg-success text-white py-3">
                    <h5 class="modal-title fw-bold" id="addPayrollModalLabel">Add New Payroll Record</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="addPayrollForm">
                        <div class="mb-3">
                            <label for="employeeName" class="form-label fw-semibold">Employee Name</label>
                            <input type="text" class="form-control" id="employeeName" required>
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label fw-semibold">Position</label>
                            <input type="text" class="form-control" id="position" required>
                        </div>
                        <div class="mb-3">
                            <label for="grossSalary" class="form-label fw-semibold">Gross Salary (UGX)</label>
                            <input type="text" class="form-control" id="grossSalary" placeholder="e.g., UGX 3,500,000" required>
                        </div>
                        <div class="mb-3">
                            <label for="deductions" class="form-label fw-semibold">Deductions (UGX)</label>
                            <input type="text" class="form-control" id="deductions" placeholder="e.g., UGX 350,000" required>
                        </div>
                        <div class="mb-3">
                            <label for="netPay" class="form-label fw-semibold">Net Pay (UGX)</label>
                            <input type="text" class="form-control" id="netPay" placeholder="e.g., UGX 3,150,000" required>
                        </div>
                        <div class="mb-4">
                            <label for="status" class="form-label fw-semibold">Status</label>
                            <select class="form-select" id="status" required>
                                <option value="Paid">Paid</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">Add Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.getElementById('addPayrollForm').addEventListener('submit', function(e) {
                e.preventDefault();
                const name = document.getElementById('employeeName').value;
                const position = document.getElementById('position').value;
                const gross = document.getElementById('grossSalary').value;
                const deductions = document.getElementById('deductions').value;
                const net = document.getElementById('netPay').value;
                const status = document.getElementById('status').value;
                const table = document.getElementById('payrollTableBody');
                const rowCount = table.rows.length + 1;
                const badgeClass = status === 'Paid' ? 'bg-success-subtle text-success' : 'bg-warning-subtle text-warning-emphasis';
                const row = `<tr>
                                <td>${rowCount}</td>
                                <td>${name}</td>
                                <td>${position}</td>
                                <td>${gross}</td>
                                <td>${deductions}</td>
                                <td>${net}</td>
                                <td><span class="badge ${badgeClass}">${status}</span></td>
                            </tr>`;
                table.insertAdjacentHTML('beforeend', row);
                // Reset form and close modal
                this.reset();
                var modal = bootstrap.Modal.getInstance(document.getElementById('addPayrollModal'));
                modal.hide();
            });
        </script>
    @endpush
</x-app-layout>