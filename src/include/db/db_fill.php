<?php
    require_once "db.php";

    $students_arr = [
        [
            "name" => "Артем Фирсов",
            "grade" => 5
        ],
        [
            "name" => "Вася Пупкин",
            "grade" => 3
        ],
        [
            "name" => "Федя Васельков",
            "grade" => 4
        ],
        [
            "name" => "Женя Карюшкин",
            "grade" => 5
        ],
        [
            "name" => "Алина Алексеева",
            "grade" => 5
        ],
        [
            "name" => "Елена Антонова",
            "grade" => 4
        ],
        [
            "name" => "Эмилия Ветрова",
            "grade" => 3
        ]
    ];

    
    foreach ($students_arr as $student) {
        $students = R::dispense('students');
            $students->name = $student["name"];
            $students->grade = $student["grade"];
        R::store($students);
    };
    
?>