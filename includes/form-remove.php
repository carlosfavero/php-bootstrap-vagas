<main>

    <h2 class="mt-2">Remover vaga</h2>

    <form method="post">

        <div class="form-group">
            <p>Você deseja realmente remover a vaga <strong><?=$obVacancy->title?></strong>?</p>
        </div>
        
        <div class="form-group">
            <a href="index.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>
            <button type="submit" name="remove" class="btn btn-danger">Remover</button>
        </div>

    </form>

</main>