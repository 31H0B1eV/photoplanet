@extends('layouts.base')

@section('title')
Photo Planet | Popular
@stop

@section('content')
<div class="container">
    &nbsp
</div>
<div class="container">

    <div class="row-fluid">

        <div class="col-lg-12">

            @foreach($result as $key=>$value)
                @if( $value['images']['standard_resolution']['url'] != '')
                <div class="row">

                    <div class="col-lg-1 col-md-1">
                        &nbsp
                    </div>

                    <div class="col-lg-5 col-md-5">
                        <a href="#" class="thumbnail">
                            <img src="<% $value['images']['standard_resolution']['url'] %>" class="img-responsive">
                        </a>
                    </div>

                    <div class="col-lg-5 col-md-5">
                        <h3><% $value['user']['full_name'] %></h3>
                        <img src="<% $value['user']['profile_picture'] %>" class="img-circle"><br />&nbsp
                        <p class="bg-info">Here must be comments from instagram</p>
                        <a class="glyphicon glyphicon-heart" href="#">&nbspLike it <!--<span class="glyphicon glyphicon-chevron-right"></span>--></a>
                    </div>

                    <div class="col-lg-1 col-md-1">
                        &nbsp
                    </div>
                </div>
                @endif

            @endforeach

        </div>

    </div>
</div>



@stop