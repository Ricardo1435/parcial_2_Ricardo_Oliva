<form method="POST" v-on:submit.prevent="createBook">
<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Libro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <b><label for="isbn">ISBN</label></b>
                    <input type="text" name="isbn" class="form-control" v-model="newIsbn">
                </div>
                <div>
                    <b><label for="name">Name</label></b>
                    <input type="text" name="name" class="form-control" v-model="newName">
                </div>
                <div>
                    <b><label for="date">Date</label></b>
                    <input type="date" name="date" class="form-control" v-model="newDate">
                </div>
                <div>
                    <b><label for="edition">Edition</label></b>
                    <input type="text" name="edition" class="form-control" v-model="newEdition">
                </div>
                <div>
                    <b><label for="description">Description</label></b>
                    <input type="text" name="description" class="form-control" v-model="newDescription">
                    <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                </div>

            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Guardar">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>
