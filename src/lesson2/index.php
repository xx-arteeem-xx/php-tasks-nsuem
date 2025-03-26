<?php
    $less_id = 2;

    require_once "../include/db/db.php";
    include "../include/elements/top.php";

    $data = $_GET;

    $students = [];

    if (isset($data["sort"])) {
        $students = R::getAll("SELECT * FROM students ORDER BY ".$data["sort"]);
    };  

    
?>

<div class="container my-5">
    <form action="./" method="get">
        <div class="input-group mb-3">
            <span class="input-group-text" id="sort">Выберите поле для сортировки</span>
            <select class="form-select" name="sort">
                <option value="id">id</option>
                <option value="name">name</option>
                <option value="grade">grade</option>
            </select>
            <input type="submit" value="Показать!" class="btn btn-secondary">
        </div>
    </form>

    <?php if (isset($data["sort"])) :?>
    <div class="my-3">
        <h3>
            Сортируем по: <?=$data["sort"]?>
        </h3>
    </div>
    <?php endif; ?>

    <table class="table table-striped table-dark mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">grade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) : ?>
                <tr>
                    <th scope="row"><?=$student["id"]?></th>
                    <td><?=$student["name"]?></td>
                    <td><?=$student["grade"]?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
    include "../include/elements/bottom.php"
?>
