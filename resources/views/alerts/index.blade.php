<div class="row">
    @if(session('created-status'))
    <div class="message-alert">
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> Created Successfully
        </div>
    </div>
    @endif

    @if(session('deleted-status'))
    <div class="message-alert">
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> Deleted Successfully
        </div>
    </div>
    @endif

    @if(session('updated-status'))
    <div class="message-alert">
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> Updated Successfully
        </div>
    </div>
    @endif
</div>
