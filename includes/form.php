<main>

    <h2 class="mt-1"><?=TITLE?></h2>

    <form method="post">

        <div class="form-group">
            <label>Titulo</label>
            <input required type="text" class="form-control" name="title" value="<?=$obVacancy->title?>"/>
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea required class="form-control" name="description"><?=$obVacancy->description?></textarea>
        </div>

        <div class="form-group">
            <label>Situação</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="active" value="s" checked> Ativa
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="active" value="n" <?=$obVacancy->active == 'n' ? 'checked' : ''?>> Inativa
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <a href="index.php">
                <button type="button" class="btn btn-success">Voltar</button>
            </a>
            <button type="submit" class="btn btn-primary"><?=(TITLE==='Cadastrar vaga'?'Cadastrar':'Atualizar')?></button>
        </div>

    </form>

</main>