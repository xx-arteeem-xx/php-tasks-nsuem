<?php
    function findMinA() {
        $minA = 0;
        $found = false;
        
        for ($A = 0; $A <= 255; $A++) {
            $valid = true;
        
            for ($x = 0; $x <= 255; $x++) {
                $cond1 = ($x & 25) != 0;
                $cond2 = ($x & 17) == 0;
                $cond3 = ($x & $A) != 0;
                
                if ($cond1 && $cond2 && !$cond3) {
                    $valid = false;
                    break;
                }
            }
            
            if ($valid) {
                $minA = $A;
                $found = true;
                break;
            }
        }
        
        return $found ? $minA : -1;
    }
    
    $result = findMinA();
?>

<?php
    $less_id = 5;
    include "../include/elements/top.php";
?>

<div class="container my-5">
    <h3>Наименьшее A:  <?= $result ?></h3>
</div>

<?php
    include "../include/elements/bottom.php"
?>
