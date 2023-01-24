{{--<div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">{{ $message }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onClick="dismissModel()">{{ $cancel }}</button>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">{{ $confirm }}</button>
                </form>
            </div>
        </div>
    </div>
</div>--}}

<div id="deleteConfirmationModel" class="modal">
    <div class="modal-background --jb-modal-close"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">{{ $message }}</p>
        </header>
            <form id="delete-frm" class="modal-card-body" action="" method="POST">
                @method('DELETE')
                @csrf
                <button class="button small green --jb-modal">{{ $confirm }}</button>
                <button type="button" class="button small red --jb-modal" onClick="dismissModel()">{{ $cancel }}</button>
            </form>
    </div>
</div>

