<?php
    $less_id = 10;
    include "../include/elements/top.php";
?>

<div class="container my-5">
    <form action="./action.php" method="POST">
        <div class="input-group mb-3">
            <span class="input-group-text" id="name-addon"><i class="fa-solid fa-circle-user"></i></span>
            <input type="text" 
                class="form-control" 
                placeholder="Имя" 
                aria-describedby="name-addon" 
                id="name" name="name">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="email-addon"><i class="fa-solid fa-envelope"></i></span>
            <input type="text" 
                class="form-control" 
                placeholder="Email" 
                aria-describedby="email-addon" 
                id="email" name="email">
        </div>
        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-comment"></i></span>
            <textarea class="form-control" id="comment" name="comment" placeholder="Комментарий"></textarea>
        </div>
        <button type="submit" class="btn btn-info btn-lg mt-3">Отправить!</button>
    </form>
</div>

<?php
    include "../include/elements/bottom.php"
?>