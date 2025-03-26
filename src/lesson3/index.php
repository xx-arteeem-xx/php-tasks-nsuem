<?php
    $less_id = 3;

    include "../include/elements/top.php";
    $types = ["test", 123, 123.456, true];
?>

<div class="container my-5">
    <table class="table table-striped table-dark mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">value</th>
                <th scope="col">type</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($types as $key => $type): ?>
                <tr>
                    <th scope="row"><?=$key+1?></th>
                    <td><?=$type?></td>
                    <td><?=gettype($type)?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
    include "../include/elements/bottom.php"
?>
