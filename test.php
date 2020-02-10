<?php 
   echo "Please input the product code string:";
    $handle = fopen ("php://stdin","r");
    $line = fgets($handle);
    echo 'input : ' .$line. "n";
    $inputProducts = rtrim($line);

    $total = 0;

    $inputArray = str_split($inputProducts, 1);

    $counts = array_count_values($inputArray);

    $productsprice = array('A'=>array('1'=>2.00, '4'=>7.00), 'B'=>array('1'=>12.00), 'C'=>array('1'=>1.25, '6'=>6.00), 'D'=>array('1'=>0.15));
    foreach($counts as $code=>$amount) {
        echo "Code : " . $code . "n";
        if(isset($productsprice[$code]) && count($productsprice[$code]) > 1) {
            $groupUnit = max(array_keys($productsprice[$code]));
            $subtotal = intval($amount / $groupUnit) * $productsprice[$code][$groupUnit] + fmod($amount, $groupUnit) * $productsprice[$code]['1'];
            $total += $subtotal; 
        }
        elseif (isset($productsprice[$code])) {
            $subtotal = $amount * $productsprice[$code]['1'];
            $total += $subtotal;
        }
        echo "Subtotal: " . $subtotal . "n";
    }
    echo 'Final Total: $' . number_format($total, 2). "n"; 
    ?>