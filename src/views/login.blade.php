<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{Config::get('spratly::spratly.title')}} / Login</title>
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Fugaz+One&text={{Config::get('spratly::spratly.title')}}&effect=shadow-multiple" />
    <link type="text/css" rel="stylesheet" href="{{asset('packages/rgv151/spratly/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('packages/rgv151/spratly/css/login.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="span4 offset4">
            <div class="signin">
                <div id="logo">
                    {{Config::get('spratly::spratly.title')}}
                </div>
                <div class="tab-content">
                    <div id="login" class="tab-pane active">
                        <form action="{{URL::to('admin/login')}}" accept-charset="utf-8" method="post">
                            <p class="muted tac">
                                Enter your username and password
                            </p>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-user"></i></span>
                                        <input type="text" name="email" placeholder="mail@domain.com">
                                    </div>
                                </div>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-lock"></i></span>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-inverse btn-block" type="submit">Sign in</button>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>
                    <div id="forgot" class="tab-pane">
                        <form action="{{URL::to('admin/login/forgot-password')}}">
                            <p class="muted tac">
                                Enter your valid e-mail
                            </p>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope"></i></span>
                                        <input type="email" placeholder="mail@domain.com" required="required">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-inverse btn-block" type="submit">Recover Password</button>
                        </form>
                    </div>
                    <div id="signup" class="tab-pane">
                        <form action="{{URL::to('admin/login/register')}}">
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-user"></i></span>
                                        <input type="text" placeholder="username">
                                    </div>
                                </div>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope"></i></span>
                                        <input type="email" placeholder="mail@domain.com">
                                    </div>
                                </div>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-lock"></i></span>
                                        <input type="password" placeholder="password">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-inverse btn-block" type="submit">Register</button>
                        </form>
                    </div>
                </div>

                <ul class="inline">
                    <li><a class="muted" href="#login" data-toggle="tab">Login</a></li>
                    <li><a class="muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
                    <li><a class="muted" href="#signup" data-toggle="tab">Signup</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('packages/rgv151/spratly/js/vendor/jquery-1.9.1.min.js')}}"><\/script>')</script>
<script type="text/javascript" src="{{asset('packages/rgv151/spratly/js/vendor/bootstrap.min.js')}}"></script>
</body>
</html>
