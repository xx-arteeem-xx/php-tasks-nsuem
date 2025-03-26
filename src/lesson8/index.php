<?php
    function stringToWordsArray($string) {
        if (empty($string)) {
            return [];
        };
        $cleanString = preg_replace('/[^\p{L}\p{N}\s]/u', '', mb_strtolower($string));
        return preg_split('/\s+/', $cleanString, -1, PREG_SPLIT_NO_EMPTY);
    };
    
    function countWordFrequency($wordsArray) {
        return array_count_values($wordsArray);
    };

    $data = $_POST;
    if (isset($data["str"])){
        $str = $data["str"];
        $wordsArray = stringToWordsArray($str);
        $wordFrequency = countWordFrequency($wordsArray);
        ksort($wordFrequency);
    }
?>

<?php
    $less_id = 8;
    include "../include/elements/top.php";
?>

<div class="container my-5">
    <form action="./" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="str">Введите строку</span>
            <input type="text" name="str" class="form-control">
            <input type="submit" value="Выполнить!" class="btn btn-secondary">
        </div>
    </form>
    <hr>
    <?php if (isset($wordFrequency)): ?>
        <table class="table table-striped table-dark mt-3">
            <thead>
                <tr>
                    <th scope="col">word</th>
                    <th scope="col">count</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wordFrequency as $key => $value): ?>
                    <tr>
                        <td><?=$key?></td>
                        <td><?=$value?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?php
    include "../include/elements/bottom.php"
?>
