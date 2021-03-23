<main>

    <section>
        <a href="index.php">
            <button type="button" class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-2">Cadastrar vaga</h2>

    <form method="post">

        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="title"/>
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="description"></textarea>
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
                        <input type="radio" name="active" value="n"> Inativa
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

</main>