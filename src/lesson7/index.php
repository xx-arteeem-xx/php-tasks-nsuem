<?php
    function sumOfDigits($number) {
        $numberStr = (string)$number;
        $sum = 0;
        
        for ($i = 0; $i < strlen($numberStr); $i++) {
            $sum += (int)$numberStr[$i];
        }
        
        return $sum;
    }

    $data = $_POST;

    if (isset($data["sum"])){
        $number = $data["sum"];
        $sum = sumOfDigits($number);
    };

    function countIntegerPoints($k, $a) {
        $count = 0;
        
        for ($x = 1; $x < floor($a); $x++) {
            $maxY = floor($k * $x - 1e-10); 
            $minY = ceil(-$k * $x + 1e-10); 
            
            if ($maxY >= $minY) {
                $count += ($maxY - $minY + 1);
            }
        }
        
        return $count;
    };

    if (isset($data["k"]) && isset($data["a"])){
        $k = $data["k"];
        $a = $data["a"];
        $count = countIntegerPoints($k, $a);
    };
?>

<?php
    $less_id = 7;
    include "../include/elements/top.php";
?>

<div class="container my-5">
    <h3>7.1. Сумма цифр числа</h3>
    <form action="./" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="sum">Введите число</span>
            <input type="number" name="sum" class="form-control">
            <input type="submit" value="Выполнить!" class="btn btn-secondary">
        </div>
    </form>
    <?php if (isset(($sum))): ?>
    <p class="lead">
        Сумма цифр числа <?= $number ?>: <strong><?= $sum ?></strong>
    </p>
    <?php endif; ?>
    <hr>
    <h3>7.2. Число точек</h3>
    <form action="./" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="k">Введите K</span>
            <input type="number" name="k" class="form-control">
            <span class="input-group-text" id="a">Введите A</span>
            <input type="number" name="a" class="form-control">
            <input type="submit" value="Выполнить!" class="btn btn-secondary">
        </div>
    </form>
    <?php if (isset($count)): ?>
    <p class="lead">
        Число точек: <strong><?= $count ?></strong>
    </p>
    <?php endif; ?>

</div>

<?php
    include "../include/elements/bottom.php"
?>
