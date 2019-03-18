@extends('admin.layouts.root')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Of Clients</h4>
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
                                <th>Tracking No.</th>
                                <th class="disabled-sorting">Actions</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>N/S</th>
                                <th>Sp Name</th>
                                <th>Sp Address</th>
                                <th>Tracking No.</th>
                                <th class="disabled-sorting">Actions</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $client->shipper_firstN }}</td>
                                    <td>{{ $client->shipper_address }}</td>
                                    <td>{{ $client->tracking_no }}</td>
                                    <td>
                                        {{--<a href="#" class="btn btn-info btn-link btn-icon btn-sm like"><i class="fa fa-heart"></i></a>--}}
                                        <a href="{{ route('mailForm', $client->id) }}" class="btn btn-outline-primary">Send Quote</i></a>
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
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
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