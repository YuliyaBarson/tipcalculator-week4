<?php

//create variables to store info 

$submit = filter_input(INPUT_POST, 'submit'); 

//create a function to calculate the tip percentage and return 


function tipCalculate($total, $percentage){  
    $total_tip = $total * ($percentage * 0.01);
    echo "<p> If your bill is $total and you'd like to tip $percentage, you should tip $total_tip</p>";
}


//if submit is set, invoke the function with the required arguments 
if(isset($submit)){
    $bill_total = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_FLOAT);
    $tip_percentage = filter_input(INPUT_POST, 'percentage');
    if($bill_total === false){
        echo "<p> Please enter a numeric value!</p>";
    }
    else{   
        tipCalculate($bill_total, $tip_percentage);
    }
}
?>