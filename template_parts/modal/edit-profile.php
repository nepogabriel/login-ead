<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 style="color: #000;" class="modal-title" id="exampleModalLongTitle">EDITE SUAS INFORMAÇÕES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="color: #000;">
                <form action="edit-profile.php" method="POST">

                    <!-- Com o type="hidden" o input fica invisível -->
                    <input type="hidden" name="id" value="<?= $dados['id']; ?>">

                    Nome:<br>
                    <input type="text" name="name" value="<?= $dados['name']; ?>"><br><br>

                    Usuário:<br>
                    <input type="text" name="username" value="<?= $dados['username']; ?>"><br><br>

                    E-mail:<br>
                    <input type="email" name="email" value="<?= $dados['email']; ?>"><br><br>

                    Idade:<br>
                    <input type="text" name="age" value="<?= $dados['age']; ?>"><br><br>

                    <button type="submit" name="btn-edit-profile" class="btn btn-success">Atualizar</button>

                    <button class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>

                </form>
            </div>
            
        </div>
    </div>
</div>