<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задания</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212; 
            color: #ffffff; 
        }
        .container {
            padding-top: 50px;
        }
        .btn-task {
            margin: 10px;
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1>Задания</h1>
        <div class="d-flex flex-wrap justify-content-center align-items-center my-5">
            <?php
                $tasks = 8;
                for ($i=1; $i <= $tasks; $i++) { 
                    echo "<a href='./lesson$i' class='btn btn-primary btn-task'>Задание $i</a>";
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>