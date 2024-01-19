<?php
    $t = date('H');
    if($t < '10'){
        echo 'Have a good morning';
    }elseif($t < '20'){
        echo 'Have a good day';
    }else{
        echo 'Have a good night';
    }
    echo '<br>';
    var_dump($t);
?>

<br>

<?php
    //Giai phuong trinh bac nhat dang ax + b = c;
    $a =5;
    $b =6;
    if($a == 0){
        if($b == 0){
            echo 'Phương trinh co vo so nghiem';
        }else{
            echo 'Phuong trinh vo nghiem';
        }
    }else{
        $x = -$b / $a;
        echo "Pt co ngiem: $x";
    }
?>