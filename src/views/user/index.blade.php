@extends('spratly::layouts.default')

@section('meta')
@stop

@section('bottom-script')
<script>
    $('.check-all').click(function() {
        var $this = $(this);

        var name = $this.data('name');

        if ($this.is(':checked')) {
            $('input[type=checkbox][name="'+name+'[]"]').prop('checked', true)
        } else {
            $('input[type=checkbox][name="'+name+'[]"]').prop('checked', false)
        }
    });
</script>
@stop

@section('content')
<!-- .row-fluid -->
{{Form::open(array('url' => URL::to('admin/users')))}}
<div class="row-fluid">
    <!-- .span12 -->
    <div class="span12">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-table"></i></div>
                <h5>Users</h5>
                <!-- .toolbar -->
                <div class="toolbar">
                    <ul class="nav">
                        <li class="active"><a href="{{URL::to('admin/users')}}">All</a></li>
                        <li><a href="{{URL::to('admin/users/create')}}">New</a></li>
                    </ul>
                </div>
                <!-- /.toolbar -->
            </header>
            <div id="actionTable" class="body collapse in">
                {{$users->links()}}
                <table class="table table-bordered responsive">
                    <thead>
                    <tr>
                        <th width="1%"><input class="check-all" type="checkbox" data-name='checked'></th>
                        <th width="2%">ID</th>
                        <th>Username</th>
                        <th>Display Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Last Login</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td><input type="checkbox" name='checked[]' value="{{$user->id}}"></td>
                        <td>{{$user->id}}</td>
                        <td><a href="{{URL::to('admin/users/edit/'.$user->id)}}">{{$user->username}}</a></td>
                        <td>{{$user->getDisplayName()}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>{{$user->last_login}}</td>
                        <td>@if($user->enabled == 1)Active @else Inactive @endif</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$users->links()}}
                <div class="form-actions">
                    <button name="action" value="active" class="btn btn-primary">Active</button>
                    <button name="action" value="deactive" class="btn btn-inverse">Deactive</button>
                    <button name="action" value="delete" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.span12 -->
</div>
{{Form::close()}}
<!-- /.row-fluid -->
@stop