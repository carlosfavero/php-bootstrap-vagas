<?php

    $message = '';
    if(isset($_GET['status'])) {
        switch ($_GET['status']) {
            case 'success':
                $message = '<div class="alert alert-success">Ação executada com sucesso!</div>';
                break;

            case 'error':
                $message = '<div class="alert alert-danger">Ação não executada!</div>';
                break;                                
        }        
    }

    $results = '';
    foreach($obVacancy as $vacancy){
        $results .= '<tr>
                        <td>'.$vacancy->id.'</td>
                        <td>'.$vacancy->title.'</td>
                        <td>'.$vacancy->description.'</td>
                        <td>'.($vacancy->active == 's' ? 'Ativa' : 'Inativa').'</td>
                        <td>'.date('d/m/Y à\s H:i:s',strtotime($vacancy->date)).'</td>
                        <td>
                            <a href="edit.php?id='.$vacancy->id.'">
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                            <a href="remove.php?id='.$vacancy->id.'">
                                <button type="button" class="btn btn-danger">Remover</button>
                            </a>
                        </td>
                    </tr>';

    }
    $results = strlen($results) ? $results : '<tr>
                                                <td colspan="6" class="text-center">Nenhuma vaga encontrada</td>
                                            </tr>';

?>

<main>

    <?=$message?>

    <section>
        <a href="new.php">
            <button type="button" class="btn btn-success">Nova vaga</button>
        </a>
    </section>

    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Situação</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$results?>
            </tbody>
        </table>
    </section>
</main>