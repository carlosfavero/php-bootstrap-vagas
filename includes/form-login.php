<?php

    $alertLogin = strlen($alertLogin) ? '<div class="alert alert-danger">'.$alertLogin.'</div>' : '';
    $alertRegister = strlen($alertRegister) ? '<div class="alert alert-danger">'.$alertRegister.'</div>' : '';

?>

<div class="jumbotron text-dark">

    <div class="row">

        <div class="col">
            <form method="post">
                <h2>Login</h2>

                <?=$alertLogin?>
                
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" require>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control" require>
                </div>
                <div class="form-group">
                    <button type="submit" name="action" value="login" class="btn btn-primary">Entrar</button>
                </div>
            </form>
        </div>

        <div class="col">
            <form method="post">
                <h2>Cadastre-se</h2>

                <?=$alertRegister?>
                
                <div class="form-group">
                    <label>Nome do usuário</label>
                    <input type="text" name="name" class="form-control" require>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="registerEmail" class="form-control" require>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="registerPassword" class="form-control" require>
                </div>
                <div class="form-group">
                    <button type="submit" name="action" value="register" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>

    </div>

</div>