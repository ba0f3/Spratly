<?php use Rgv151\Spratly\Menu; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7">   <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8">          <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9">                 <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js">                        <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{Config::get('spratly::spratly.title')}} <?php if(!empty($title)): echo " / ",$title; endif ?></title>
    <meta name="description" content="Metis: Bootstrap Responsive Admin Theme">
    <meta name="viewport" content="width=device-width">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Fugaz+One&text={{Config::get('spratly::spratly.title')}}&effect=shadow-multiple" />
    <link type="text/css" rel="stylesheet" href="{{asset('packages/rgv151/spratly/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('packages/rgv151/spratly/css/bootstrap-responsive.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('packages/rgv151/spratly/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('packages/rgv151/spratly/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('packages/rgv151/spratly/css/calendar.css')}}">

    <link type="text/css" rel="stylesheet" href="{{asset('packages/rgv151/spratly/css/theme.css')}}">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="{{asset('packages/rgv151/spratly/css/font-awesome-ie7.min.css')}}"/>
    <![endif]-->
    <script src="{{asset('packages/rgv151/spratly/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    @section('meta')
    @show
</head>
<body>

<!-- BEGIN WRAP -->
<div id="wrap">


<!-- BEGIN TOP BAR -->
<div id="top">
    <!-- .navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="{{URL::to('/admin')}}">{{Config::get('spratly::spratly.title')}}</a>
                <!-- .topnav -->
                <div class="btn-toolbar topnav">
                    <div class="btn-group">
                        <a id="changeSidebarPos" class="btn btn-success" rel="tooltip"
                           data-original-title="Show / Hide Sidebar" data-placement="bottom">
                            <i class="icon-resize-horizontal"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-inverse" rel="tooltip" data-original-title="E-mail" data-placement="bottom">
                            <i class="icon-envelope"></i>
                            <span class="label label-warning">5</span>
                        </a>
                        <a class="btn btn-inverse" rel="tooltip" href="#" data-original-title="Messages"
                           data-placement="bottom">
                            <i class="icon-comments"></i>
                            <span class="label label-important">4</span>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-inverse" rel="tooltip" href="#" data-original-title="Document"
                           data-placement="bottom">
                            <i class="icon-file"></i>
                        </a>
                        <a href="#helpModal" class="btn btn-inverse" rel="tooltip" data-placement="bottom"
                           data-original-title="Help" data-toggle="modal">
                            <i class="icon-question-sign"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-inverse" data-placement="bottom" data-original-title="Logout" rel="tooltip"
                           href="{{URL::to('admin/logout')}}"><i class="icon-off"></i></a></div>
                </div>
                <!-- /.topnav -->
                <div class="nav-collapse collapse">
                    <!-- .nav -->
                    <ul class="nav">
                        <?php
                        $top_nav = Menu::where('alias', '=', 'top')->first();
                        $top_menus = Menu::where('parent_id', '=', $top_nav['id'])->where('enabled', '=', 1)->orderBy('order')->get();
                        $curent_path = Route::getCurrentRoute()->getPath();
                        foreach($top_menus as $menu):
                            $path = URL::to(Config::get('spratly::spratly.prefix') . '/'. $menu->path);

                            if(!empty($menu->path)):
                        ?>
                            <li class="<?php if($curent_path == $path):?>active<?php endif; ?>"><a href="<?php echo $path; ?>"><?php echo $menu->name; ?></a></li>
                        <?php
                            else:
                        ?>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <?php echo $menu->name; ?> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                <?php
                                $children = Menu::where('parent_id', '=', $menu->id)->where('enabled', '=', 1)->get();
                                foreach($children as $child):
                                    $path = URL::to(Config::get('spratly::spratly.prefix') . '/'. $child->path);
                                    echo '<li>',link_to($path, $child->name),'</li>';
                                endforeach;
                                ?>
                                </ul>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </ul>
                    <!-- /.nav -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.navbar -->
</div>
<!-- END TOP BAR -->


@include('spratly::partials.header')

<!-- BEGIN LEFT  -->
<section>
<div id="left">
    <!-- .user-media -->
    <div class="media user-media hidden-phone">
        <a href="" class="user-link">
            <img src="{{asset('packages/rgv151/spratly/img/user.gif')}}" alt="" class="media-object img-polaroid user-img">
            <span class="label user-label">16</span>
        </a>

        <div class="media-body hidden-tablet">
            <h5 class="media-heading"><a href="{{URL::to('/admin/user/'.$authUser->id)}}">{{$authUser->getDisplayName()}}</a></h5>
            <ul class="unstyled user-info">
                <li>Role: {{$authUser->role->name}}</li>
                <li>Last Access : <br/>
                    <small><i class="icon-calendar"></i> {{$authUser->last_login}}</small>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.user-media -->

    <!-- BEGIN MAIN NAVIGATION -->
    <ul id="menu" class="unstyled accordion collapse in">
        <?php
        $left_nav = Menu::where('alias', '=', 'left')->first();
        $left_menus = Menu::where('parent_id', '=', $left_nav['id'])->where('enabled', '=', 1)->orderBy('order')->get();
        $curent_path = Route::getCurrentRoute()->getPath();
        foreach($left_menus as $menu):
            $path = URL::to(Config::get('spratly::spratly.prefix') . '/'. $menu->path);

            if(!empty($menu->path)):
            ?>
            <li><a href="<?php echo $path; ?>"><i class="icon-<?php echo $menu->icon; ?> icon-large"></i> <?php echo $menu->name; ?></a></li>
            <?php
            else:
            $children = Menu::where('parent_id', '=', $menu->id)->where('enabled', '=', 1)->get();
            ?>
            <li class="accordion-group">
                <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#<?php echo $menu->alias; ?>-nav">
                    <i class="icon-<?php echo $menu->icon; ?> icon-large"></i> <?php echo $menu->name; ?>
                    <span class="label label-inverse pull-right"><?php echo count($children); ?></span>
                </a>
                <ul class="collapse" id="<?php echo $menu->alias; ?>-nav">
                    <?php
                    foreach($children as $child):
                        $path = URL::to(Config::get('spratly::spratly.prefix') . '/'. $child->path);
                        ?>
                        <li><a href='<?php echo $path; ?>'><i class="icon-angle-right"></i> <?php echo $child->name;?></a></li>
                        <?php
                    endforeach;
                    ?>
                </ul>
            </li>
        <?php
        endif;
        endforeach;
        ?>
        <li class="accordion-group">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#configuration-nav">
                <i class="icon-cogs icon-large"></i> Configuration <span class="label label-inverse pull-right">2</span>
            </a>
            <ul class="collapse" id="configuration-nav">
                <li><a href='{{URL::to('admin/manage/forms')}}'><i class="icon-angle-right"></i> Forms</a></li>
                <li><a href='{{URL::to('admin/manage/a')}}'><i class="icon-angle-right"></i> Posts</a></li>
            </ul>
        </li>
    </ul>
    <!-- END MAIN NAVIGATION -->

</div>
<!-- END LEFT -->

<!-- BEGIN MAIN CONTENT -->

<div id="content">
    @if(!empty($message) || !$errors->isEmpty())
    <div class="row-fluid alerts">
        <!--
        @if(!$errors->isEmpty())
        <div class="error alert-error">
            <button type="button" class="close" data-dismiss="error">&times;</button>
            @foreach($errors->all() as $error)
            <div>{{$error}}</div>
            @endforeach
        </div>
        @endif
        //-->
        @if(!empty($message))
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{$message}}
        </div>

        @endif
    </div>
    @endif
@section('content')
@show
</div>
<!-- END CONTENT -->
</section>

<!-- #push do not remove -->
<div id="push"></div>
<!-- /#push -->
</div>
<!-- END WRAP -->

<div class="clearfix"></div>

@include('spratly::partials.footer')

<!-- #helpModal -->
<div id="helpModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel"
     aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="helpModalLabel"><i class="icon-external-link"></i> Help</h3>
    </div>
    <div class="modal-body">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
        </p>
    </div>
    <div class="modal-footer">

        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>
<!-- /#helpModal -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('packages/rgv151/spratly/js/vendor/jquery-1.9.1.min.js')}}"><\/script>')</script>

<script src="{{asset('packages/rgv151/spratly/js/vendor/jquery-migrate-1.1.1.min.js')}}"></script>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
<script>window.jQuery.ui || document.write('<script src="{{asset('packages/rgv151/spratly/js/vendor/jquery-ui-1.10.0.custom.min.js')}}"><\/script>')</script>


<script src="{{asset('packages/rgv151/spratly/js/vendor/bootstrap.min.js')}}"></script>

@section('bottom-script')
@show
</body>
</html>