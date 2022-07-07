<script src="{{ asset('admin-assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin-assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('admin-assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('admin-assets/vendor/libs/hammer/hammer.js') }}"></script>

<script src="{{ asset('admin-assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('admin-assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('admin-assets/vendor/js/menu.js') }}"></script>

<!-- Vendors JS -->
@yield('vendor-js')

<!-- Main JS -->
<script src="{{ asset('admin-assets/js/main.js') }}"></script>

<!-- Page JS -->
@yield('page-js')