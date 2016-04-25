<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel5</title>

    <meta name="description" content="">
    <meta name="author" content="Akshay Kumar">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{URL().'/assets/css/bootstrap/bootstrap.css'}}" />

    <!-- Calendar Styling  -->
    <link rel="stylesheet" href="{{URL().'/assets/css/plugins/calendar/calendar.css'}}" />

    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

    <!-- Base Styling  -->
    <link rel="stylesheet" href={{URL().'/assets/css/app/app.v1.css'}} />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-ng-app>
<!-- Preloader -->
<div class="loading-container">
    <div class="loading">
        <div class="l1">
            <div></div>
        </div>
        <div class="l2">
            <div></div>
        </div>
        <div class="l3">
            <div></div>
        </div>
        <div class="l4">
            <div></div>
        </div>
    </div>
</div>
<!-- Preloader -->
<aside class="left-panel">

    <div class="user text-center">
        <img src="{{'/assets/images/avtar/user.png'}}" class="img-circle" alt="...">
        <h4 class="user-name">laravel 5</h4>

        <div class="dropdown user-login">
            <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-circle status-icon available"></i> Available <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon busy"></i> Busy</a></li>
                <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon invisibled"></i> Invisible</a></li>
                <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon signout"></i> Sign out</a></li>
            </ul>
        </div>
    </div>



    <nav class="navigation">
        <ul class="list-unstyled">
            <li class="active"><a href="#"><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
            <li class="has-submenu"><a href="#"><i class="fa fa-comment-o"></i> <span class="nav-label">Users</span></a>
                <ul class="list-unstyled">
                    <li><a href="/users/index/1">Home</a></li>
                    <li><a href="/users/create">Add New User</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="fa fa-flag-o"></i> <span class="nav-label">categories</span></a>
                <ul class="list-unstyled">
                    <li><a href="/categories">Home</a></li>
                    <li><a href="/categories/create">Add New category</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="fa fa-flag-o"></i> <span class="nav-label">products</span></a>
                <ul class="list-unstyled">
                    <li><a href="/products">Home</a></li>
                    <li><a href="/products/create">Add New product</a></li>
                </ul>
            </li>
        </ul>
    </nav>

</aside>
<!-- Aside Ends-->

<section class="content">

    <header class="top-head container-fluid">
        <button type="button" class="navbar-toggle pull-left">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <ul class="nav-toolbar">
            <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu lg pull-right arrow panel panel-default arrow-top-right">
                    <div class="panel-body text-center">
                        <div class="row">
                            {{--<div class="col-xs-6 col-sm-4"><a href="#" class="text-green"><span class="h2"><i class="fa fa-envelope-o"></i></span><p class="text-gray no-margn">Messages</p></a></div>--}}
                            {{--<div class="col-xs-6 col-sm-4"><a href="#" class="text-purple"><span class="h2"><i class="fa fa-calendar-o"></i></span><p class="text-gray no-margn">Events</p></a></div>--}}

                            {{--<div class="col-xs-12 visible-xs-block"><hr></div>--}}

                            {{--<div class="col-xs-6 col-sm-4"><a href="#" class="text-red"><span class="h2"><i class="fa fa-comments-o"></i></span><p class="text-gray no-margn">Chatting</p></a></div>--}}

                            {{--<div class="col-lg-12 col-md-12 col-sm-12  hidden-xs"><hr></div>--}}

                            {{--<div class="col-xs-6 col-sm-4"><a href="#" class="text-yellow"><span class="h2"><i class="fa fa-folder-open-o"></i></span><p class="text-gray">Folders</p></a></div>--}}

                            {{--<div class="col-xs-12 visible-xs-block"><hr></div>--}}

                            {{--<div class="col-xs-6 col-sm-4"><a href="#" class="text-primary"><span class="h2"><i class="fa fa-flag-o"></i></span><p class="text-gray">Task</p></a></div>--}}
                            {{--<div class="col-xs-6 col-sm-4"><a href="#" class="text-info"><span class="h2"><i class="fa fa-star-o"></i></span><p class="text-gray">Favorites</p></a></div>--}}
                            <div class="col-xs-6 col-sm-4"><a href="/users/logout" class="text-primary"><span class="h2"><i class="fa fa-flag-o"></i></span><p class="text-gray">logout</p></a></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </header>
    <!-- Header Ends -->

    <!-- content div -->

    <div class="warper container-fluid">
        <div class="page-header"><h1>laravel <small>Let's get a quick overview...</small></h1></div>
        @yield('content')
    </div>
    <!-- end of contact div -->

    <footer class="container-fluid footer">
        Copyright &copy; 2015 <a href="#" target="_blank">CS</a>
        <a href="#" class="pull-right scrollToTop"><i class="fa fa-chevron-up"></i></a>
    </footer>

</section>
<!-- Content Block Ends Here (right box)-->

<!-- JQuery v1.9.1 -->
<script src="{{'/assets/js/jquery/jquery-1.9.1.min.js'}}" type="text/javascript"></script>
<script src="{{'/assets/js/jquery/jquery.js'}}" type="text/javascript"></script>
<script src="{{'/assets/js/jquery/jquery-ui.js'}}" type="text/javascript"></script>
<script src="{{'/assets/js/plugins/underscore/underscore-min.js'}}"></script>
<!-- Bootstrap -->
<script src="{{'/assets/js/bootstrap/bootstrap.min.js'}}"></script>
<!-- Globalize -->
<script src="{{'/assets/js/globalize/globalize.min.js'}}"></script>
<!-- NanoScroll -->
<script src="{{'/assets/js/plugins/nicescroll/jquery.nicescroll.min.js'}}"></script>
<!-- Chart JS -->
<script src="{{'/assets/js/plugins/DevExpressChartJS/dx.chartjs.js'}}"></script>
<script src="{{'/assets/js/plugins/DevExpressChartJS/world.js'}}"></script>
<!-- For Demo Charts -->
<script src="{{'/assets/js/plugins/DevExpressChartJS/demo-charts.js'}}"></script>
<script src="{{'/assets/js/plugins/DevExpressChartJS/demo-vectorMap.js'}}"></script>
<!-- Sparkline JS -->
<script src="{{'/assets/js/plugins/sparkline/jquery.sparkline.min.js'}}"></script>
<!-- For Demo Sparkline -->
<script src="{{'/assets/js/plugins/sparkline/jquery.sparkline.demo.js'}}"></script>
<!-- Angular JS -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js"></script>
<!-- ToDo List Plugin -->
<script src="{{'/assets/js/angular/todo.js'}}"></script>
<!-- Calendar JS -->
<script src="{{'/assets/js/plugins/calendar/calendar.js'}}"></script>
<!-- Calendar Conf -->
<script src="{{'/assets/js/plugins/calendar/calendar-conf.js'}}"></script>
<!-- Custom JQuery -->
<script src="{{'/assets/js/app/custom.js'}}" type="text/javascript"></script>
<script type="text/javascript" src="{{'/assets/js/app/nicEdit.js'}}"></script>
<script type="text/javascript">bkLib.onDomLoaded(function () {nicEditors.allTextAreas()});</script>
<script>$('#date').datepicker({dateFormat:'dd-mm-yy' }); </script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56821827-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
