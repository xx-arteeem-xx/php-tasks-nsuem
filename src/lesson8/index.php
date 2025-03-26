<?php

?>

<?php
    $less_id = 8;
    include "../include/elements/top.php";
?>

<div class="container my-5">
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
