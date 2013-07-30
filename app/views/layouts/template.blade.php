<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        {{ HTML::style('css/bootstrap.min.css') }}
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>

        {{ HTML::style('css/bootstrap-responsive.min.css') }}
        {{ HTML::style('css/main.css') }}

        <?php echo HTML::script('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js'); ?>
    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">Time Tracker</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            @if (Auth::user())
                                <li>{{ HTML::linkRoute('dashboard','Dashboard') }}</li>
                                <li>{{ HTML::linkRoute('time_entries','Time Entries') }}</li>
                                <li>{{ HTML::linkRoute('projects','Projects') }}</li>
                                <li>{{ HTML::link('logout', 'Logout') }}</li>
                            @else
                                <li>{{ HTML::linkRoute('login','Login') }}</li>
                            @endif
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container-fluid container-content">
            @yield('content')
        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- <script>window.jQuery || document.write(<?php //echo HTML::script('js/vendor/jquery-1.9.1.min.no-js'); ?>)</script> -->

        <?php echo HTML::script('js/vendor/bootstrap.min.js'); ?>

        <?php echo HTML::script('js/main.js'); ?>

    </body>
</html>
