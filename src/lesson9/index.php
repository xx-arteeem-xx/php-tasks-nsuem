<?php
    $less_id = 9;
    include "../include/elements/top.php";
?>

<div class="container my-5">
    <p class="lead">
        Время с помощью PHP: <?= date('l jS \of F Y h:i:s A'); ?>
    </p>
    <p class="lead">
        Время с помощью JS: <span id="jsTime"></span>
    </p>

    <p class="lead">
        Время будет отличаться, так как в случае с PHP время берется с настроек системы сервера, а в JS с настроек системы клиента.
    </p>
</div>

<script>
    var now = new Date();
    document.getElementById("jsTime").innerHTML =  now;
</script>

<?php
    include "../include/elements/bottom.php"
?>
