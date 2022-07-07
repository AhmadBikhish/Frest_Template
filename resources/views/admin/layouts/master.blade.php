<!DOCTYPE html>
<html lang="fa" class="light-style layout-navbar-fixed layout-menu-fixed" dir="rtl" data-theme="theme-default" data-assets-path="{{ asset('admin-assets').'/' }}" data-template="vertical-menu-template">

<head>
    @include('admin.layouts.head-tag')
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin.layouts.sidebar')

            <div class="layout-page">

                @include('admin.layouts.header')

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('content')
                    </div>

                    @include('admin.layouts.footer')

                    <div class="content-backdrop fade"></div>
                </div>

            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>

    @include('admin.layouts.script')

</body>
</html>