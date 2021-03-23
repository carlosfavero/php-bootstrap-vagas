<?php

    $results = '';

    foreach($obVacancy as $vacancy){
        $results .= '<tr>
                        <td>'.$vacancy->id.'</td>
                        <td>'.$vacancy->title.'</td>
                        <td>'.$vacancy->description.'</td>
                        <td>'.($vacancy->active == 's' ? 'Ativa' : 'Inativa').'</td>
                        <td>'.date('d/m/Y à\s H:i:s',strtotime($vacancy->date)).'</td>
                        <td></td>
                    </tr>';

    }

?>

<main>

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