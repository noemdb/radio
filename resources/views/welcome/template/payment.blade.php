<div class="container-fluid">
    <div class="row">

        <div class="col-lg-6">
            <livewire:welcome.payment.report.list-component />
        </div>
        <div class="col-lg-6">
            <livewire:welcome.payment.btnpay.list-component />
        </div>

    </div>

</div>

{{-- @section('styles')
    @parent
    <link href="{{ asset('vendor/sweetalert/9.10.12/css/theme-bootstrap-4.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('vendor/sweetalert/11.4.8/js/sweetalert2.all.min.js') }}"></script>
@endsection --}}

@section('sweetalert')
    @parent
    <script>
        window.addEventListener('swal',function(e){
            Swal.fire(e.detail);
        });

        window.addEventListener('swal:confirm',function(e){

            Swal.fire({
                title: e.detail.message,
                text: e.detail.text,
                icon: e.detail.type,
                buttons: true,
                dangerMode: true,
                showCancelButton: true,
            })
            .then((result) => {
                if (result.value) {
                    window.livewire.emit('remove',e.detail.id);
                }
            });
        });

        window.addEventListener('swal:question',function(e){
            Swal.fire({
                title: e.detail.message,
                text: e.detail.text,
                icon: e.detail.type,
                buttons: true,
                dangerMode: true,
                showCancelButton: true,
            })
            .then((result) => {
                if (result.value) {
                    window.livewire.emit(e.detail.method,e.detail.id);
                }
            });
        });

    </script>
@endsection
