@extends('admin.layouts.root')

@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-9">
                <div class="card offset-lg-3">
                    <div class="card-header">
                        <h4 class="card-title">Transport Mode List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="legendary" class="table">
                                <thead class="text-primary">
                                <th class="text-center">
                                    #
                                </th>
                                <th>
                                    sender name
                                </th>

                                <th >
                                    Edit
                                </th>
                                <th >
                                    Delete
                                </th>
                                </thead>
                                <tbody>
                                @foreach($transports as $transport)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            {{ $transport->name }}
                                        </td>


                                        <td >
                                            <a href="{{ route('editTransport', $transport->id ) }}">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <form id="form-data-{{$transport->id}}" class="remove" action='{{ route('destroyTransport', $transport->id) }}' method='post' style="display: none;">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <a type="button" href="#">Delete</a>
                                            </form>
                                            <a href="#" rel="tooltip" class="btn btn-danger btn-icon btn-sm remove"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer_css')
    <script>
        let table = $('#legendary').DataTable();
        $(document).ready(function() {
            table.on('click', '.remove', function (e) {
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
                        document.getElementById('form-data-{{$transport->id}}').submit();
                    }

                });
                e.preventDefault();
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

@endsection