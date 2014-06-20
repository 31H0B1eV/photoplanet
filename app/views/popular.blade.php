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

<!--            object(stdClass)[146]-->
<!--            public 'username' => string 'artemzinoviev' (length=13)-->
<!--            public 'bio' => string '' (length=0)-->
<!--            public 'website' => string '' (length=0)-->
<!--            public 'profile_picture' => string 'http://images.ak.instagram.com/profiles/profile_644521835_75sq_1392765666.jpg' (length=77)-->
<!--            public 'full_name' => string 'Artem' (length=5)-->
<!--            public 'counts' =>-->
<!--            object(stdClass)[152]-->
<!--            public 'media' => int 0-->
<!--            public 'followed_by' => int 1-->
<!--            public 'follows' => int 11-->
<!--            public 'id' => string '644521835' (length=9)-->

            @if(isset($current_user))
                <h3 class="header pull-right">User Name is <small><% $current_user->username %></small></h3>
            @endif

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