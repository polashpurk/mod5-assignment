<?php


function checkNumbers($sub_1, $sub_2, $sub_3, $sub_4, $sub_5 ) {
    $numbers = [$sub_1 , $sub_2 , $sub_3 , $sub_4 , $sub_5];
     $errors = [];
    foreach ($numbers as $number) {
       if ($number > 100) {
            $errors[] = "Error: Number $number is above 100, so it is invalid.";
        }else if ($number < 33) {
            $errors[] = "Error: Number $number is below 33, So it is failed.";
        }
    	
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        return 0;
    }
    else{
    	return 1;
    }
	
}
     


// Marks for five subjects
$sub_1 = 33;
$sub_2 = 48;
$sub_3 = 74;
$sub_4 = 94;
$sub_5 = 73;

$ret=checkNumbers($sub_1 , $sub_2 , $sub_3 , $sub_4 , $sub_5 );

if($ret==0)
	exit;
else{
	// Calculate total, average, and percentage


$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

// Determine grade using switch case


$sAvg = (int)($average / 10);
//echo $sAvg;
switch ($sAvg) {
    case 10:
    case 9:
        $grade = "A";
        break;
    case 8:
        $grade = "B";
        break;
    case 7:
        $grade = "C";
        break;
    case 6:
        $grade = "D";
        break;
    default:
        $grade = "E";
        break;
}

// Display the results
echo "The Total marks   = $total/500\n";
echo "The Average marks = $average\n";
echo "The Percentage    = $percentage%\n";
echo "The Grade         = '$grade'\n";

}


?>