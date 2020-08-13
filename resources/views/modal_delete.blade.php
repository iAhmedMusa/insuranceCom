<div id="modal_delete" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <p>Möchten Sie diese Informationen entfernen?</p>
            </div>
            <div class="modal-footer">
                <form action="" method="post" id="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger marked_status">Ja</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Nein</button>
                </form>
            </div>
        </div>
    </div>
</div>