@extends('admin.layouts.root')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Shipment Booking List</h4>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>N/S</th>
                                <th>Sp Name</th>
                                <th>Sp Address</th>
                                <th>Rec Name</th>
                                <th>Rec Address</th>
                                <th>Tracking No.</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>N/S</th>
                                <th>Sp Name</th>
                                <th>Sp Address</th>
                                <th>Rec Name</th>
                                <th>Rec Address</th>
                                <th>Tracking No.</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($shipments as $shipment)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $shipment->shipper_firstN }}</td>
                                    <td>{{ $shipment->shipper_address }}</td>
                                    <td>{{ $shipment->receiver_firstN }}</td>
                                    <td>{{ $shipment->receiver_address }}</td>
                                    <td>{{ $shipment->tracking_no }}</td>
                                    <td class="text-right">
                                        {{--<a href="#" class="btn btn-info btn-link btn-icon btn-sm like"><i class="fa fa-heart"></i></a>--}}
                                        <a href="{{ route('updateShipment', $shipment->id) }}" class="btn btn-warning btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i></a>
                                        <form id="form-data" class="remove" action='{{ route('destroyShipment', $shipment->id) }}' method='post' style="display: none;">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <a type="button" href="#">Delete</a>
                                        </form>
                                        <a href="#" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm remove"><i class="fa fa-times"></i></a>

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
@endsection
@section('footer_css')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }
            });
            var table = $('#datatable').DataTable();
            // Edit record
            table.on('click', '.edit', function() {
                // Swal.fire({
                //     text: 'You Are About To Edit This Shipment!.',
                //     type: 'danger',
                //     confirmButtonText: 'OK'
                // });
                // $tr = $(this).closest('tr');
                // var data = table.row($tr).data();
                // alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            });
            // Delete a record
            table.on('click', '.remove', function(e) {
                // alert('You clicked on Like button');
                const swalWithBootstrapButtons = Swal.mixin({
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false,
                });

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'error',
                    Height: 200,
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {

                    if (result.value) {
                        swalWithBootstrapButtons.fire({
                            title: 'Deleted!',
                            text: 'Your file has been deleted.',
                            type: 'success',
                            timer: 9000,

                        });
                        document.getElementById('form-data').submit();
                    }

                });
                e.preventDefault();
        });
        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
@endsection