<?php
    $less_id = 12;
    include "../include/elements/top.php";
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $name = trim($_POST['name'] ?? '');
    $comment = trim($_POST['comment'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $age = trim($_POST['age'] ?? '');

    if (empty($name)) {
        $errors[] = "Введите имя.";
    }

    if (empty($comment)) {
        $errors[] = "Введите комментарий.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email введен некорректно.";
    }

    if (empty($age) || !is_numeric($age) || $age <= 0 || $age > 120) {
        $errors[] = "Возраст введен некорректно.";
    }

    if (empty($errors)) {
        echo "<p class='lead text-success'>Форма успешно отправлена!</p>";
    } else {
        foreach ($errors as $error) {
            echo "<p class='text-danger m-0 p-0'>" . htmlspecialchars($error) . "</p>";
        }
    }
}
?>

<form method="POST" action="">
    <div class="input-group mb-3">
        <span class="input-group-text">Имя</span>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    
    <div class="input-group mb-3">
        <span class="input-group-text">Email</span>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">Возраст</span>
        <input type="number" class="form-control" id="age" name="age">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">Комментарий</span>
        <textarea class="form-control" id="comment" name="comment"></textarea>
    </div>

    <button type="submit" class="btn btn-info btn-lg mt-3">Отправить</button>
</form>

<?php
    include "../include/elements/bottom.php"
?>