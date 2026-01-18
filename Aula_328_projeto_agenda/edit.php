<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <?php
            include_once("templates/backbtn.php");
        ?>
        <h1 id="main-title">Adicionar contato</h1>
        <form id="create-form" action="config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="digite o nome" required>
                </div>
                <div class="form-group">
                    <label for="name">Telefone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="digite o telefone" required>
                </div>
                <div class="form-group">
                    <label for="observations">Observações</label>
                    <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

    </div>
    
<?php
    include_once("templates/footer.php");
?>