<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Administrator | {{ $data['title'] }}</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.gritter.min.css" />
    <link rel="stylesheet" href="assets/css/select2.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-editable.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="no-skin">
    <div id="navbar" class="navbar navbar-default ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a href="/dashboard" class="navbar-brand">
                    <small>
                        <i class="fa fa-desktop"></i>
                        {{ $data['identity']->name }}
                    </small>
                </a>
            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="purple dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                            <span class="badge badge-important">8</span>
                        </a>

                        <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="ace-icon fa fa-exclamation-triangle"></i>
                                8 Notifications
                            </li>

                            <li class="dropdown-content">
                                <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">
                                                    <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                    New Comments
                                                </span>
                                                <span class="pull-right badge badge-info">+12</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-footer">
                                <a href="#">
                                    See all notifications
                                    <i class="ace-icon fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="green dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                            <span class="badge badge-success">5</span>
                        </a>

                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="ace-icon fa fa-envelope-o"></i>
                                5 Messages
                            </li>

                            <li class="dropdown-content">
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                            <span class="msg-body">
                                                <span class="msg-title">
                                                    <span class="blue">Alex:</span>
                                                    Ciao sociis natoque penatibus et auctor ...
                                                </span>

                                                <span class="msg-time">
                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                    <span>a moment ago</span>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-footer">
                                <a href="inbox.html">
                                    See all messages
                                    <i class="ace-icon fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="light-blue dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="Jason's Photo" />
                            <span class="user-info">
                                <small>Welcome,</small>
                                {{ auth()->user()->name }}
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="/profile">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="#modal-password" role="button" data-toggle="modal">
                                    <i class="ace-icon fa fa-key"></i>
                                    Ubah Password
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="/logout">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}
        </script>

        <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('sidebar')
                } catch (e) {}
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success">
                        <i class="ace-icon fa fa-signal"></i>
                    </button>

                    <button class="btn btn-info">
                        <i class="ace-icon fa fa-pencil"></i>
                    </button>

                    <button class="btn btn-warning">
                        <i class="ace-icon fa fa-users"></i>
                    </button>

                    <button class="btn btn-danger">
                        <i class="ace-icon fa fa-cogs"></i>
                    </button>
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- /.sidebar-shortcuts -->

            <ul class="nav nav-list">
                <li class="">
                    <a href="index.html">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text"> Dashboard </span>
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul><!-- /.nav-list -->

            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>
        </div>

        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="/dashboard">Dashboard</a>
                        </li>
                        <li class="active">{{ $data['title'] }}</li>
                    </ul><!-- /.breadcrumb -->

                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                <i class="ace-icon fa fa-search nav-search-icon"></i>
                            </span>
                        </form>
                    </div><!-- /.nav-search -->
                </div>

                <div class="page-content">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            @yield('content')
                            <div id="modal-password" class="modal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/change-password" method="post">
                                            @csrf
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="blue bigger">Ubah Password</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <label for="current_password">Password Lama</label>
                                                        <div class="input-group">
                                                            <input class="form-control" id="current_password" name="current_password" type="password" placeholder="password lama" required />
                                                            <span class="input-group-addon" id="show-password1">
                                                                <i id="icon-eye" class="fa fa-eye  bigger-110"></i>
                                                            </span>
                                                        </div>
                                                        <div class="space-4"></div>
                                                        <label for="new_password">Password Baru</label>
                                                        <div class="input-group">
                                                            <input class="form-control" id="new_password" name="new_password" type="password" placeholder="password baru" required />
                                                            <span class="input-group-addon" id="show-password2">
                                                                <i id="icon-eye" class="fa fa-eye  bigger-110"></i>
                                                            </span>
                                                        </div>
                                                        <div class="space-4"></div>
                                                        <label for="password_confirmation">Ulangi Password</label>
                                                        <div class="input-group">
                                                            <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="ulangi password" required />
                                                            <span class="input-group-addon" id="show-password3">
                                                                <i id="icon-eye" class="fa fa-eye  bigger-110"></i>
                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-sm" data-dismiss="modal">
                                                    <i class="ace-icon fa fa-times"></i>
                                                    Cancel
                                                </button>

                                                <button type="submit" class="btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Simpan
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <span class="bigger-120">
                        <span class="blue bolder">Undangan</span>
                        Web &copy; 2023
                    </span>

                    &nbsp; &nbsp;
                    <span class="action-buttons">
                        <a href="#">
                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->
    <script type="text/javascript">
        document.getElementById('show-password1').addEventListener('mousedown', function() {
            var passwordInput = document.getElementById('current_password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                document.getElementById('icon-eye').classList.remove('fa-eye');
                document.getElementById('icon-eye').classList.add('fa-eye-slash');
            }
        });
        document.getElementById('show-password1').addEventListener('mouseup', function() {
            var passwordInput = document.getElementById('current_password');
            if (passwordInput.type === 'text') {
                passwordInput.type = 'password';
                document.getElementById('icon-eye').classList.remove('fa-eye-slash');
                document.getElementById('icon-eye').classList.add('fa-eye');
            }
        });
        document.getElementById('show-password2').addEventListener('mousedown', function() {
            var passwordInput = document.getElementById('new_password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                document.getElementById('icon-eye').classList.remove('fa-eye');
                document.getElementById('icon-eye').classList.add('fa-eye-slash');
            }
        });
        document.getElementById('show-password2').addEventListener('mouseup', function() {
            var passwordInput = document.getElementById('new_password');
            if (passwordInput.type === 'text') {
                passwordInput.type = 'password';
                document.getElementById('icon-eye').classList.remove('fa-eye-slash');
                document.getElementById('icon-eye').classList.add('fa-eye');
            }
        });
        document.getElementById('show-password3').addEventListener('mousedown', function() {
            var passwordInput = document.getElementById('password_confirmation');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                document.getElementById('icon-eye').classList.remove('fa-eye');
                document.getElementById('icon-eye').classList.add('fa-eye-slash');
            }
        });
        document.getElementById('show-password3').addEventListener('mouseup', function() {
            var passwordInput = document.getElementById('password_confirmation');
            if (passwordInput.type === 'text') {
                passwordInput.type = 'password';
                document.getElementById('icon-eye').classList.remove('fa-eye-slash');
                document.getElementById('icon-eye').classList.add('fa-eye');
            }
        });
    </script>
    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
    <script src="assets/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="assets/js/jquery-ui.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/jquery.gritter.min.js"></script>
    <script src="assets/js/bootbox.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/jquery.hotkeys.index.min.js"></script>
    <script src="assets/js/bootstrap-wysiwyg.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/spinbox.min.js"></script>
    <script src="assets/js/bootstrap-editable.min.js"></script>
    <script src="assets/js/ace-editable.min.js"></script>
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <!-- ace scripts -->
    <script src="assets/js/ace-elements.min.js"></script>
    <script src="assets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->

</body>

</html>