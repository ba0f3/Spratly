@extends('spratly::layouts.default')

@section('content')
<!-- .outer -->
<div class="container-fluid outer">
<div class="row-fluid">
<!-- .inner -->
<div class="span12 inner">
<!--BEGIN INPUT TEXT FIELDS-->
{{Form::open(array('url' => URL::to('admin/users/save'),'class' => 'form-horizontal', 'autocomplete'=> 'off'))}}
<div class="row-fluid">
    <div class="span12">
        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-edit"></i></div>
                <h5>Account Details</h5>
                <!-- .toolbar -->
                <div class="toolbar">
                    <ul class="nav">
                        <li>
                            <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#basic">
                                <i class="icon-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.toolbar -->
            </header>
            <div id="basic" class="accordion-body collapse in body">
                <div class="control-group<?php if($errors->has('username')): echo ' error';endif; ?>">
                    {{Form::label('username', 'Username', array('class'=>"control-label"));}}
                    <div class="controls">
                        {{Form::text('username', null, array('class'=>'span6'));}}
                        <?php if($errors->has('username')): ?>
                            <span class="help-inline"><?php echo $errors->first('username'); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="control-group<?php if($errors->has('email')): echo ' error';endif; ?>">
                    {{Form::label('email', 'E-Mail Address', array('class'=>"control-label"));}}
                    <div class="controls">
                        {{Form::text('email', null, array('class'=>'span6'));}}
                        <?php if($errors->has('email')): ?>
                            <span class="help-inline"><?php echo $errors->first('email'); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="control-group<?php if($errors->has('first_name')): echo ' error';endif; ?>">
                    {{Form::label('first_name', 'First Name', array('class'=>"control-label"));}}
                    <div class="controls">
                        {{Form::text('first_name', null, array('class'=>'span6'));}}
                        <?php if($errors->has('first_name')): ?>
                            <span class="help-inline"><?php echo $errors->first('first_name'); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="control-group<?php if($errors->has('last_name')): echo ' error';endif; ?>">
                    {{Form::label('last_name', 'Last Name', array('class'=>"control-label"));}}
                    <div class="controls">
                        {{Form::text('last_name', null, array('class'=>'span6'));}}
                        <?php if($errors->has('last_name')): ?>
                            <span class="help-inline"><?php echo $errors->first('last_name'); ?></span>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="control-group<?php if($errors->has('password')): echo ' error';endif; ?>">
                    <label for="password" class="control-label">Password</label>
                    <div class="controls">
                        <input class="span6" name="password" type="password" id="password">
                        <?php if($errors->has('password')): ?>
                            <span class="help-inline"><?php echo $errors->first('password'); ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="control-group">
                    <label for="password_confirmation" class="control-label">Password (again)</label>
                    <div class="controls">
                        <input class="span6" name="password_confirmation" type="password" id="password_confirmation">
                    </div>
                </div>

                <div class="control-group">
                    {{Form::label('enabled', 'Status', array('class'=>"control-label"))}}
                    <div class="controls">
                        {{Form::select('enabled', array('Inactive', 'Active'), 1)}}
                    </div>
                </div>

            </div>
        </div>

        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-edit"></i></div>
                <h5>Role</h5>
                <!-- .toolbar -->
                <div class="toolbar">
                    <ul class="nav">
                        <li>
                            <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#role">
                                <i class="icon-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.toolbar -->
            </header>
            <div id="role" class="accordion-body collapse in body">
                <div class="control-group">
                    {{Form::label('role_id', 'Role', array('class'=>"control-label"))}}
                    <div class="controls">
                        {{Form::select('role_id', $roles['list'], $roles['selected'])}}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary" name="action" value="create"><i class="icon-save"></i> Create</button> or
            <button class="btn btn-danger" name="action" value="cancel"><i class="icon-refresh"></i> Cancel</button>

        </div>
    </div>
</div>
{{ Form::close() }}
<!--END TEXT INPUT FIELD-->

</div>
<!-- /.inner -->
</div>
<!-- /.row-fluid -->
</div>
<!-- /.outer -->
@stop