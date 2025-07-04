<x-app-layout>
    <section class="m-2 section dashboard">
        <div class="row">

            <!-- Purchased Spares Card -->
            <div class="col-xxl-3 col-md-6 mb-4">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Purchased Spares</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-tools"></i>
                            </div>
                            <div class="ps-3">
                                <h6>--</h6>
                                <span class="text-muted small">Placeholder for purchased spares count</span>
                            </div>
                        </div>
                        <div id="sparesChart" style="height:100px;"></div>
                    </div>
                </div>
            </div>

            <!-- Payroll Management Card -->
            <div class="col-xxl-3 col-md-6 mb-4">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Payroll Management</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-cash-stack"></i>
                            </div>
                            <div class="ps-3">
                                <h6>--</h6>
                                <span class="text-muted small">Placeholder for payroll summary</span>
                            </div>
                        </div>
                        <div id="payrollChart" style="height:100px;"></div>
                    </div>
                </div>
            </div>

            <!-- Fuel Records Card -->
            <div class="col-xxl-3 col-md-6 mb-4">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Fuel Records</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-fuel-pump"></i>
                            </div>
                            <div class="ps-3">
                                <h6>--</h6>
                                <span class="text-muted small">Placeholder for fuel usage</span>
                            </div>
                        </div>
                        <div id="fuelChart" style="height:100px;"></div>
                    </div>
                </div>
            </div>

            <!-- Excavator Records Card -->
            <div class="col-xxl-3 col-md-6 mb-4">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Excavator Records</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-truck-front"></i>
                            </div>
                            <div class="ps-3">
                                <h6>--</h6>
                                <span class="text-muted small">Placeholder for excavator stats</span>
                            </div>
                        </div>
                        <div id="excavatorChart" style="height:100px;"></div>
                    </div>
                </div>
            </div>

            <!-- Pick-up Truck & Locomotive Records Card -->
            <div class="col-xxl-4 col-md-6 mb-4">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Pick-up Truck & Locomotive Records</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-truck"></i>
                            </div>
                            <div class="ps-3">
                                <h6>--</h6>
                                <span class="text-muted small">Placeholder for vehicle stats</span>
                            </div>
                        </div>
                        <div id="vehicleChart" style="height:100px;"></div>
                    </div>
                </div>
            </div>

            <!-- Expatriate Visa Records Card -->
            <div class="col-xxl-4 col-md-6 mb-4">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Expatriate Visa Records</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-passport"></i>
                            </div>
                            <div class="ps-3">
                                <h6>--</h6>
                                <span class="text-muted small">Placeholder for visa records</span>
                            </div>
                        </div>
                        <div id="visaChart" style="height:100px;"></div>
                    </div>
                </div>
            </div>

            <!-- Travel Expenses Card -->
            <div class="col-xxl-4 col-md-6 mb-4">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Travel Expenses</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-currency-exchange"></i>
                            </div>
                            <div class="ps-3">
                                <h6>--</h6>
                                <span class="text-muted small">Placeholder for travel expenses</span>
                            </div>
                        </div>
                        <div id="travelChart" style="height:100px;"></div>
                    </div>
                </div>
            </div>

            <!-- Government Taxes Card -->
            <div class="col-xxl-6 col-md-6 mb-4">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Government Taxes</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-bank"></i>
                            </div>
                            <div class="ps-3">
                                <h6>--</h6>
                                <span class="text-muted small">Placeholder for government tax summary</span>
                            </div>
                        </div>
                        <div id="govTaxChart" style="height:120px;"></div>
                    </div>
                </div>
            </div>

            <!-- Provincial Taxes Card -->
            <div class="col-xxl-6 col-md-6 mb-4">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Provincial Taxes</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            <div class="ps-3">
                                <h6>--</h6>
                                <span class="text-muted small">Placeholder for provincial tax summary</span>
                            </div>
                        </div>
                        <div id="provTaxChart" style="height:120px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Placeholder Graphs -->
        @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
            <script>
                function placeholderBarChart(id) {
                    var chart = echarts.init(document.getElementById(id));
                    chart.setOption({
                        xAxis: { type: 'category', data: ['A', 'B', 'C', 'D'] },
                        yAxis: { type: 'value' },
                        series: [{
                            data: [12, 20, 15, 8],
                            type: 'bar',
                            itemStyle: { color: '#0d6efd' }
                        }]
                    });
                }
                function placeholderPieChart(id) {
                    var chart = echarts.init(document.getElementById(id));
                    chart.setOption({
                        series: [{
                            type: 'pie',
                            radius: '60%',
                            data: [
                                { value: 40, name: 'A' },
                                { value: 30, name: 'B' },
                                { value: 20, name: 'C' },
                                { value: 10, name: 'D' }
                            ]
                        }]
                    });
                }
                function placeholderLineChart(id) {
                    var chart = echarts.init(document.getElementById(id));
                    chart.setOption({
                        xAxis: { type: 'category', data: ['Jan', 'Feb', 'Mar', 'Apr'] },
                        yAxis: { type: 'value' },
                        series: [{
                            data: [5, 15, 9, 12],
                            type: 'line',
                            smooth: true,
                            itemStyle: { color: '#198754' }
                        }]
                    });
                }
                document.addEventListener('DOMContentLoaded', function () {
                    placeholderBarChart('sparesChart');
                    placeholderPieChart('payrollChart');
                    placeholderBarChart('fuelChart');
                    placeholderLineChart('excavatorChart');
                    placeholderBarChart('vehicleChart');
                    placeholderPieChart('visaChart');
                    placeholderBarChart('travelChart');
                    placeholderBarChart('govTaxChart');
                    placeholderBarChart('provTaxChart');
                });
            </script>
        @endpush
    </section>
</x-app-layout>
