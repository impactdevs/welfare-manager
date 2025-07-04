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
                                <h6>124</h6>
                                <span class="text-muted small">Total spares purchased in Q2</span>
                            </div>
                        </div>
                        <div id="sparesChart" style="height:250px;"></div>
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
                                <h6>UGX 55M</h6>
                                <span class="text-muted small">Total payroll for last month</span>
                            </div>
                        </div>
                        <div id="payrollChart" style="height:250px;"></div>
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
                                <h6>700L</h6>
                                <span class="text-muted small">Fuel consumed across all sites</span>
                            </div>
                        </div>
                        <div id="fuelChart" style="height:250px;"></div>
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
                                <h6>23</h6>
                                <span class="text-muted small">Total excavator operations</span>
                            </div>
                        </div>
                        <div id="excavatorChart" style="height:250px;"></div>
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
                                <h6>21</h6>
                                <span class="text-muted small">Total vehicles in operation</span>
                            </div>
                        </div>
                        <div id="vehicleChart" style="height:250px;"></div>
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
                                <h6>16</h6>
                                <span class="text-muted small">Active expatriate visas</span>
                            </div>
                        </div>
                        <div id="visaChart" style="height:250px;"></div>
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
                                <h6>UGX 8.1M</h6>
                                <span class="text-muted small">Spent on travel this quarter</span>
                            </div>
                        </div>
                        <div id="travelChart" style="height:250px;"></div>
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
                                <h6>UGX 10.2M</h6>
                                <span class="text-muted small">Paid in government taxes</span>
                            </div>
                        </div>
                        <div id="govTaxChart" style="height:250px;"></div>
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
                                <h6>UGX 3.5M</h6>
                                <span class="text-muted small">Total provincial tax paid</span>
                            </div>
                        </div>
                        <div id="provTaxChart" style="height:250px;"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Scripts -->
        @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
            <script>
                function barChart(id, categories, data, color = '#0d6efd') {
                    var chart = echarts.init(document.getElementById(id));
                    chart.setOption({
                        tooltip: { trigger: 'axis' },
                        xAxis: { type: 'category', data: categories },
                        yAxis: { type: 'value' },
                        series: [{
                            data: data,
                            type: 'bar',
                            itemStyle: { color: color }
                        }]
                    });
                }

                function pieChart(id, data) {
                    var chart = echarts.init(document.getElementById(id));
                    chart.setOption({
                        tooltip: { trigger: 'item' },
                        series: [{
                            type: 'pie',
                            radius: '60%',
                            data: data,
                            emphasis: {
                                itemStyle: {
                                    shadowBlur: 10,
                                    shadowOffsetX: 0,
                                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                                }
                            }
                        }]
                    });
                }

                function lineChart(id, months, data, color = '#198754') {
                    var chart = echarts.init(document.getElementById(id));
                    chart.setOption({
                        tooltip: { trigger: 'axis' },
                        xAxis: { type: 'category', data: months },
                        yAxis: { type: 'value' },
                        series: [{
                            data: data,
                            type: 'line',
                            smooth: true,
                            itemStyle: { color: color }
                        }]
                    });
                }

                document.addEventListener('DOMContentLoaded', function () {
                    barChart('sparesChart', ['Jan', 'Feb', 'Mar', 'Apr'], [30, 25, 40, 29]);
                    pieChart('payrollChart', [
                        { value: 40000, name: 'Salaries' },
                        { value: 10000, name: 'Allowances' },
                        { value: 5000, name: 'Overtime' }
                    ]);
                    barChart('fuelChart', ['Site A', 'Site B', 'Site C'], [300, 220, 180], '#ffc107');
                    lineChart('excavatorChart', ['Q1', 'Q2', 'Q3', 'Q4'], [12, 19, 15, 23], '#dc3545');
                    barChart('vehicleChart', ['Trucks', 'Pick-ups', 'Locomotives'], [10, 7, 4], '#6f42c1');
                    pieChart('visaChart', [
                        { value: 12, name: 'Valid' },
                        { value: 3, name: 'Expiring Soon' },
                        { value: 1, name: 'Expired' }
                    ]);
                    barChart('travelChart', ['Jan', 'Feb', 'Mar', 'Apr'], [2000, 1800, 2500, 2100], '#fd7e14');
                    barChart('govTaxChart', ['VAT', 'Income', 'Customs'], [5000, 3200, 1800], '#20c997');
                    barChart('provTaxChart', ['Western', 'Central', 'Eastern'], [1200, 1400, 900], '#6610f2');
                });
            </script>
        @endpush
    </section>
</x-app-layout>
