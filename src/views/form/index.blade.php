@extends('spratly::layouts.default')

@section('content')
<!-- .row-fluid -->
<div class="row-fluid">
    <!-- .span12 -->
    <div class="span12">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-table"></i></div>
                <h5>Forms</h5>
                <!-- .toolbar -->
                <div class="toolbar">
                    <ul class="nav">
                        <li class="active"><a href="{{URL::to('admin/manage/forms')}}">All</a></li>
                        <li><a href="{{URL::to('admin/manage/forms/create')}}">New</a></li>
                    </ul>
                </div>
                <!-- /.toolbar -->
            </header>
            <div id="actionTable" class="body collapse in">
                <table class="table table-bordered responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Model</th>
                        <th width="10%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <button class="btn btn-info remove"><i class="icon-eye-open"></i></button>
                            <button class="btn edit"><i class="icon-edit"></i></button>
                            <button class="btn btn-danger remove"><i class="icon-remove"></i></button>

                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>
                            <button class="btn btn-info remove"><i class="icon-eye-open"></i></button>
                            <button class="btn edit"><i class="icon-edit"></i></button>
                            <button class="btn btn-danger remove"><i class="icon-remove"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>
                            <button class="btn btn-info remove"><i class="icon-eye-open"></i></button>
                            <button class="btn edit"><i class="icon-edit"></i></button>
                            <button class="btn btn-danger remove"><i class="icon-remove"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.span12 -->
</div>
<!-- /.row-fluid -->
@stop