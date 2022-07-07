<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme card" id="layout-navbar">
    <div class="container-fluid">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>

        <!-- Style Switcher -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item me-2 me-xl-0 float-right">
                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                <i class="bx bx-sm"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav flex-row align-items-center ms-2" style="width: 380px">

        <li>
            <div class="d-flex text-end me-2">
                <div class="flex-grow-1">
                    <span>تاریخ : {{ jalali(now()) }}</span>
                </div>
            </div>
        </li>
        </ul>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            

            <ul class="navbar-nav flex-row align-items-center ms-auto">

                <li>
                    <div class="d-flex text-end me-2">
                        <div class="flex-grow-1">
                            <span class="fw-semibold d-block">جان اسنو</span>
                            <small>نقش : مدیر</small>
                        </div>
                    </div>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="{{ asset('admin-assets/img/avatars/1.png') }}" alt class="rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online mt-1">
                                    <img src="{{ asset('admin-assets/img/avatars/1.png') }}" alt class="rounded-circle">
                                </div>
                                </div>
                                <div class="flex-grow-1">
                                <span class="fw-semibold d-block">جان اسنو</span>
                                <small>مدیر</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i><span class="align-middle">پروفایل من</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-cog me-2"></i><span class="align-middle">تنظیمات</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                        <i class="bx bx-power-off me-2 text-danger"></i><span class="align-middle text-danger">خروج</span>
                        </a>
                    </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>