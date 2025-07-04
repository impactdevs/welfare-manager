<div class="sidebar bg-success border-start border-start-5 shadow rounded-start-5 border-dashed mobile-menu col-12 col-md-3 col-lg-2 col-xl-2"
    style="position: sticky; top: 0; height: 100vh; overflow-y: auto;">
    <div class="border-bottom border-bottom-5 h-25 d-flex align-items-center justify-content-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="company logo"
            class="object-fit-contain border rounded img-fluid" style="max-width: 100%; height: auto;">
    </div>
    <div class="d-md-flex flex-column p-0 pt-lg-3">
        <h6
            class="text-uppercase px-3 text-body-secondary text-light d-flex justify-content-between align-items-center my-3">
            <span class="text-light">GENERAL</span>
            <i class="bi bi-bar-chart text-light"></i>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center gap-2 fs-5 fw-bold @if (request()->routeIs('dashboard')) bg-secondary @endif"
                    href="{{ route('dashboard') }}">
                    <i class="bi bi-bar-chart"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center gap-2 fs-5 fw-bold @if (request()->routeIs('payroll-management')) bg-secondary @endif"
                    href="{{ route('payroll-management') }}">
                    <i class="bi bi-cash-stack"></i>
                    Payroll Management
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center gap-2 fs-5 fw-bold @if (request()->routeIs('purchased-spares')) bg-secondary @endif"
                    href="{{ route('purchased-spares') }}">
                    <i class="bi bi-bag-check"></i>
                    Purchased Spares
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center gap-2 fs-5 fw-bold @if (request()->routeIs('fuel-records')) bg-secondary @endif"
                    href="{{ route('fuel-records') }}">
                    <i class="bi bi-fuel-pump"></i>
                    Fuel Records
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center gap-2 fs-5 fw-bold @if (request()->routeIs('excavator-records')) bg-secondary @endif"
                    href="{{ route('excavator-records') }}">
                    <i class="bi bi-truck"></i>
                    Excavator Records
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center gap-2 fs-5 fw-bold @if (request()->routeIs('pickup-truck-locomotive-records')) bg-secondary @endif"
                    href="{{ route('pickup-truck-locomotive-records') }}">
                    <i class="bi bi-truck-front"></i>
                    Pick-up Truck & Locomotive Records
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center gap-2 fs-5 fw-bold @if (request()->routeIs('expatriate-visa-records')) bg-secondary @endif"
                    href="{{ route('expatriate-visa-records') }}">
                    <i class="bi bi-person-badge"></i>
                    Expatriate Visa Records
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center gap-2 fs-5 fw-bold @if (request()->routeIs('travel-expenses')) bg-secondary @endif"
                    href="{{ route('travel-expenses') }}">
                    <i class="bi bi-currency-exchange"></i>
                    Travel Expenses
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center gap-2 fs-5 fw-bold @if (request()->routeIs('government-taxes')) bg-secondary @endif"
                    href="{{ route('government-taxes') }}">
                    <i class="bi bi-bank"></i>
                    Government Taxes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center gap-2 fs-5 fw-bold @if (request()->routeIs('provincial-taxes')) bg-secondary @endif"
                    href="{{ route('provincial-taxes') }}">
                    <i class="bi bi-bank2"></i>
                    Provincial Taxes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center gap-2 fs-5 fw-bold @if (request()->routeIs('employee-management')) bg-secondary @endif"
                    href="{{ route('employee-management') }}">
                    <i class="bi bi-people"></i>
                    Employee Management
                </a>
            </li>
        </ul>
    </div>
</div>
