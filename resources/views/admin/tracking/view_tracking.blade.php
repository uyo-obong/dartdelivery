@extends('admin.layouts.root')

@section('content')
    <div class="content">
        <div class="row">
            @include('messages.flash')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Simple Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th class="text-center">
                                    #
                                </th>
                                <th>
                                    sender name
                                </th>
                                <th>
                                    sender Address
                                </th>
                                <th>
                                    sender Phone Number
                                </th>
                                <th>
                                    Tracking No.
                                </th>

                                <th class="text-right">
                                    Actions
                                </th>
                                </thead>
                                <tbody>
                                @foreach($trackings as $tracking)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            {{ $tracking->shipper_firstN }}
                                        </td>
                                        <td>
                                            {{ $tracking->shipper_address }}
                                        </td>

                                        <td>
                                            {{ $tracking->shipper_phone }}
                                        </td>

                                        <td>
                                            {{ $tracking->tracking_no }}
                                        </td>

                                        <td class="text-right">
                                            <a href="{{ route('tracking', $tracking->id ) }}">
                                               <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                                <i class="fa fa-edit"></i>
                                               </button>
                                            </a>
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