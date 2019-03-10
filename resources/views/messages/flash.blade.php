<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

{{-- User Shipping --}}
@if (Session()->has('Usershipping'))
    <script>
        window.addEventListener('load', function(event) {
            const swalWithBootstrapButtons = Swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            });

            swalWithBootstrapButtons.fire({
                text: '{{ session()->get('Usershipping') }}',
                type: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location.href = "{{ route('homeDetails') }}";
                }
            })
        })
    </script>
@endif

{{--Shiping Flash Message--}}
@if (Session()->has('Shipping'))
    <script>
        window.addEventListener('load', function(event) {
            const swalWithBootstrapButtons = Swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            });

            swalWithBootstrapButtons.fire({
                text: '{{ session()->get('Shipping') }}',
                type: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location.href = "{{ route('cpanel') }}";
                }
            })
        })
    </script>
@endif

{{--Send Qute Flash Message--}}
@if (Session()->has('Quote'))
    <script>
        window.addEventListener('load', function(event) {
            const swalWithBootstrapButtons = Swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            });

            swalWithBootstrapButtons.fire({
                text: '{{ session()->get('Quote') }}',
                type: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location.href = "{{ route('client') }}";
                }
            })
        })
    </script>
@endif

{{--Tracking Flash Message--}}
@if (Session()->has('Tracking'))
    <script>
        window.addEventListener('load', function(event) {
            const swalWithBootstrapButtons = Swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            });

            swalWithBootstrapButtons.fire({
                text: '{{ session()->get('Tracking') }}',
                type: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location.href = "{{ route('view.tracking') }}";
                }
            })
        })
    </script>
@endif

{{--Transport Mode Flash Message--}}
@if (Session()->has('Transport'))
    <script>
        window.addEventListener('load', function(event) {
            const swalWithBootstrapButtons = Swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            });

            swalWithBootstrapButtons.fire({
                text: '{{ session()->get('Transport') }}',
                type: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location.href = "{{ route('listTransport') }}";
                }
            })
        })
    </script>
@endif

{{--Shipping Type Flash Message--}}
@if (Session()->has('ShippingType'))
    <script>
        window.addEventListener('load', function(event) {
            const swalWithBootstrapButtons = Swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            });

            swalWithBootstrapButtons.fire({
                text: '{{ session()->get('ShippingType') }}',
                type: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location.href = "{{ route('shippinglist') }}";
                }
            })
        })
    </script>
@endif

{{--Admin Flash Message--}}
@if (Session()->has('Admin'))
    <script>
        window.addEventListener('load', function(event) {
            const swalWithBootstrapButtons = Swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            });

            swalWithBootstrapButtons.fire({
                text: '{{ session()->get('Admin') }}',
                type: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location.href = "{{ route('adminList') }}";
                }
            })
        })
    </script>
@endif