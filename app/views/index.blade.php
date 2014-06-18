@extends('layouts.base')

@section('title')
 Photo Planet | Index
@stop

@section('content')

<div class="container" id="ajaxContent">

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
            <h3><% $art['title'] %></h3>
            <h4><% $art['description'] %></h4>
            <p><% $art['content'] %></p>
            <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

    </div>

    <hr>

    @endforeach

    <div class="row text-center">

        <div class="col-lg-12">
            <% $article->links() %>
        </div>

    </div>

    <hr>

    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Photo Planet <strong>2014</strong></p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

@stop