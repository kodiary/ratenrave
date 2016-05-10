@if (session('status'))
        <div class="alert alert-success" style="margin-top: 10px">
            <div class="container" style="margin-top:0 !important;">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" title="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('status') }}
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endif

