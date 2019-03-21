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
                                <th>Sender Name</th>
                                <th>Sender Email</th>
                                <th>Tracking No.</th>
                                <th class="disabled-sorting">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>N/S</th>
                                <th>Sender Name</th>
                                <th>Sender Email</th>
                                <th>Tracking No.</th>
                                <th class="disabled-sorting">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($sendTrackings as $sendTracking)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $sendTracking->shipper_firstN }}</td>
                                <td>{{ $sendTracking->shipper_email }}</td>
                                <td>{{ $sendTracking->tracking_no }}</td>
                                <td>

                                    <form  class="form-horizontal" action="{{ route('sendNo', $sendTracking->id ) }}" method="POST">
                                        {{ csrf_field() }}
                                        @include('admin.sendtracking.send')
                                    </form>
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