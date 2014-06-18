@extends('layouts.base')

@section('title')
 Hello page
@stop

@section('content')

<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Start Bootstrap</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="#about">About</a>
                </li>
                <li><a href="#services">Services</a>
                </li>
                <li><a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>

</nav>

<!-- /.container -->
<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">1 Col Portfolio
                <small>Showcase Your Work One Column at a Time</small>
            </h1>
        </div>

    </div>

    @foreach ($article as $art)

    <div class="row">

        <div class="col-lg-7 col-md-7">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x300" alt="">
            </a>
        </div>

        <div class="col-lg-5 col-md-5">
            <h3>{{ $art['title'] }}</h3>
            <h4>{{ $art['description'] }}</h4>
            <p>{{ $art['content'] }}</p>
            <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

    </div>

    <hr>


    @endforeach

    <div class="row text-center">

        <div class="col-lg-12">
            {{ $article->links() }}
        </div>

    </div>

    <hr>

    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Company 2013</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

@stop