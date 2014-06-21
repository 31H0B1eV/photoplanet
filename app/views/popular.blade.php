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
                @include('includes.popular_with_user_login')
            @endif

            <!--This block works only if no user login-->
            @if(!isset($current_user))
                @include('includes.most_popular')
            @endif
            <!--end of block if no user login-->

        </div>

    </div>
</div>



@stop