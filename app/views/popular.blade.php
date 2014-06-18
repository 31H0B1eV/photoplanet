@extends('layouts.base')

@section('title')
Photo Planet | Popular
@stop

@section('content')

<div class="container">

    <div class="row">

        <div class="col-lg-12">

            @foreach($result as $res)
                @foreach($res as $key=>$value)
                    @if( $value['images']['standard_resolution']['url'] != '')
                    <div class="row">

                        <div class="col-lg-7 col-md-7">
                            <a href="#" class="thumbnail">
                                <img src="<% $value['images']['standard_resolution']['url'] %>" class="img-responsive">
                            </a>
                        </div>

                        <div class="col-lg-5 col-md-5">
                            <h3><% $value['user']['full_name'] %></h3>
                            <img src="<% $value['user']['profile_picture'] %>" class="img-responsive">
                            <p>Test</p>
                            <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                    @endif

                @endforeach
            @endforeach

        </div>

    </div>
</div>



@stop