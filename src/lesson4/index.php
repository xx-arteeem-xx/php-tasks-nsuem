<?php
    $less_id = 4;

    include "../include/elements/top.php";
    $find = 0;

    $data = $_GET;
    if (isset($data["find"])){
        $find = $data["find"];
    };
    
    $values = [123, 456, 789, 1, 2, 3, 4, 5, 123, 456, 789];
    
?>

<div class="container my-5">
    <form action="./" method="get">
        <div class="input-group mb-3">
            <span class="input-group-text" id="sort">Введите текст для поиска</span>
            <input type="text" name="find" class="form-control">
            <input type="submit" value="Выполнить!" class="btn btn-secondary">
        </div>
    </form>

    <table class="table table-striped table-dark mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">value</th>
                <th scope="col">equal?</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($values as $key => $value): ?>
                <tr>
                    <th scope="row"><?=$key+1?></th>
                    <td><?=$value?></td>
                    <td><?= ($value==$find)? "yes" : "no"  ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
    include "../include/elements/bottom.php"
?>
