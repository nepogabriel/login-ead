<!-- Modal -->
<div class="modal fade" id="delete_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 style="color: #000;" class="modal-title" id="exampleModalLongTitle">EDITE SUAS INFORMAÇÕES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="color: #000;">
                <form action="delete_user.php" method="POST">

                    <!-- Com o type="hidden" o input fica invisível -->
                    <input type="hidden" name="id" value="<?= $dados['id']; ?>">

                    <button type="submit" name="btn-delete-user" class="btn btn-success">Sim, Quero Deletar!</button>

                    <button class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>

                </form>
            </div>

        </div>
    </div>
</div>