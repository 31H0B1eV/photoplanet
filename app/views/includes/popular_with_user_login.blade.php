<div class="row">
    <div class="col-lg-9 col-md-9 pull-left">
        <form role="form">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter search tag</label>
                <input type="text" class="form-control" id="InputTag" placeholder="Enter search tag">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    <div class="col-lg-3 col-md-3 pull-right">
        <p class="text-right">&#35;<% $current_user->username %></p>
        <img src="<% $current_user->profile_picture %>" class="img-responsive img-thumbnail pull-right">
    </div>
</div>
<hr />
