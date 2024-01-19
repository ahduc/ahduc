<?php
    //Tinh tong tu 1 den 100
    $tong = 0;
    for($i = 0; $i <= 100; $i++){
        if($i > 50) continue;
        $tong += $i;
    }
    echo "i: $i <br>";
    echo "Tong: $tong";
?>


<?php
    $colors = array('red', 'grenn', 'blue', 'yellow');
    foreach($colors as $value){
        echo "$value <br>";
    }
    for($i = 0; $i < count($colors); $i++){
        echo "$colors[$i] <br>";
    }
?>