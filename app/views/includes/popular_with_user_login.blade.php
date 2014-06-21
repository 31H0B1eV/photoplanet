<div class="row">
    <div class="col-lg-9 col-md-9 pull-left">

        <% Form::open(array('action' => '/search')) %>
        <div class="form-group">
            <% Form::label('search_tag', 'Search tag', array('class' => 'control_label')) %>
            <% Form::text('search_tag', null, array('class' => 'form-control')) %>
        </div>
        <% Form::submit('Submit', array('class' => 'btn btn-default')) %>
        <% Form::close() %>

    </div>
    <div class="col-lg-3 col-md-3 pull-right">
        <p class="text-right">&#35;<% $current_user->username %></p>
        <img src="<% $current_user->profile_picture %>" class="img-responsive img-thumbnail pull-right">
    </div>
</div>
<!--    dd($tags->getData()[0]);-->
<!--    dd($tags->getData()[0]->name);-->
<!--    dd($tags->getData()[0]->media_count);-->

    @if(isset($tags))
        <div class="row">
            @foreach($tags->getData() as $tag)

                <div class="col-lg-4 col-md-4">
                    <hr />
                        <h3>Tag: <small><% $tag->name %></small></h3>
                        <h3>Count: <small><% $tag->media_count %></small></h3>
                    <hr/>
                </div>

            @endforeach
        </div>
    @endif


<hr />
