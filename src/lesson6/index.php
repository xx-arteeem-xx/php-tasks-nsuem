<?php
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        if ($number == 2) {
            return true;
        }
        if ($number % 2 == 0) {
            return false;
        }
        
        $sqrtNum = sqrt($number);
        for ($i = 3; $i <= $sqrtNum; $i += 2) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    };
    
    $primeNumbers = [];
    for ($i = 1; $i <= 1000; $i++) {
        if (isPrime($i)) {
            array_push($primeNumbers, $i);
        }
    };

    function validatePassword($password) {
        $errors = [];
        
        // 1. Проверка длины пароля
        if (strlen($password) < 8) {
            $errors[] = "Пароль должен содержать не менее 8 символов";
        }
        
        // 2. Проверка на наличие заглавной буквы
        if (!preg_match('/[A-ZА-ЯЁ]/u', $password)) {
            $errors[] = "Пароль должен содержать хотя бы одну заглавную букву";
        }
        
        // 3. Проверка на наличие строчной буквы
        if (!preg_match('/[a-zа-яё]/u', $password)) {
            $errors[] = "Пароль должен содержать хотя бы одну строчную букву";
        }
        
        // 4. Проверка на наличие цифры
        if (!preg_match('/[0-9]/', $password)) {
            $errors[] = "Пароль должен содержать хотя бы одну цифру";
        }
        
        // 5. Проверка на наличие специального символа
        if (!preg_match('/[#\$%&\'\(\)\*\+,\-\.\/;<=>\?@\[\\\\\]\^_\{\}!~]/', $password)) {
            $errors[] = "Пароль должен содержать хотя бы один специальный символ: # $ % & ' ( ) * + , - . / ; <= > ? @ [ \ ] ^ _ { ! } ~";
        }
        
        return $errors;
    }

    $data = $_POST;

    if (isset($data["password"])){
        $errors = validatePassword($data["password"]);
        if (empty($errors)) {
            $message = "Пароль соответствует всем требованиям!";
            $messageClass = 'success';
        } else {
            $message = "<ul class='lead text-danger'> <li>" . implode("</li><li>", $errors) . "</li>";
            $messageClass = 'danger';
        }
    }
?>

<?php
    $less_id = 6;
    include "../include/elements/top.php";
?>

<div class="container my-5">
    <h3>6.1. Простые числа в диапазоне от 1 до 1000:</h3>
    <?php foreach ($primeNumbers as $key => $value): ?>
        <span><?=$value?></span>
    <?php endforeach; ?>
    <hr>
    <h3>6.2. Валидация:</h3>
    <form action="./" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="pass">Введите пароль</span>
            <input type="password" name="password" class="form-control">
            <input type="submit" value="Выполнить!" class="btn btn-secondary">
        </div>
    </form>
    <div class="text-start">
        <p class="text-body-secondary">Требования к паролю:</p>
        <ul class="text-body-secondary">
            <li>Длина не менее 8 символов</li>
            <li>Хотя бы одна заглавная буква</li>
            <li>Хотя бы одна строчная буква</li>
            <li>Хотя бы одна цифра</li>
            <li>Хотя бы один специальный символ: # $ % & ' ( ) * + , - . / ; <= > ? @ [ \ ] ^ _ { ! } ~</li>
        </ul>
        <p class="lead text-<?=$messageClass?>">
            <?=$message?>
        </p>
    </div>

</div>

<?php
    include "../include/elements/bottom.php"
?>
