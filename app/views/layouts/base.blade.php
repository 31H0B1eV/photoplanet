<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 50px; /* 50px is the height of the navbar - change this if the navbarn height changes */
        }

        footer {
            margin: 50px 0;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Most Popular Picture</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="#popular">About</a>
                </li>
                <li><a href="#services">Services</a>
                </li>
                <li><a href="/login">Login</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>

</nav>
            @yield('content')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../../../public/js/jquery.jqpagination.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
            <script>

                $('.pagination a').on('click', function (event) {
                    event.preventDefault();
                    if ( $(this).attr('href') != '#' ) {
                        $("html, body").animate({ scrollTop: 0 }, "fast");
                        $('#ajaxContent').load($(this).attr('href'));
                    }
                });

            </script>

</body>
</body>
</html>