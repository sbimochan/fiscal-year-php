<?php
/* corresponding fiscal days of AD years. Month will be 07-> July*/
$fiscalYear=array(
            "2011"=>16,
            "2012"=>15,
            "2013"=>15,
            "2014"=>16,
            "2015"=>16,
            "2016"=>15,
            "2017"=>15,
            "2018"=>16,
            "2019"=>16,
            "2020"=>15,
            "2021"=>15,
            "2022"=>16,
            "2023"=>16,
            "2024"=>15,
            "2025"=>15,
            "2026"=>16,
            "2027"=>16,
            "2028"=>15,
            "2029"=>15,
            "2030"=>16,
            "2031"=>16,
            "2032"=>15,
            "2033"=>15
       
    );
/* Testing with static date*/
$created='2017-08-15';
//Placing year month and day in array
$exploding=explode("-",$created);
	if($exploding[1]>7) // if month is more than June
	{ 
		$newExpYear=$exploding[0]+1; // 2017+1
	}
	 elseif($exploding[1]>=7 && $exploding[2]<$fiscalYear[$exploding[0]])//if month>=7 AND days less than corresponding day
	 {
		$newExpYear=$exploding[0]; //2017 =>same year
    }
    elseif($exploding[1]>=7 && $exploding[2]>$fiscalYear[$exploding[0]]) //if month >=7 AND day greater than corresponding day
    {
    	$newExpYear=$exploding[0]+1; //2018
    }
    elseif($exploding[1]>=7 && $exploding[2]>=$fiscalYear[$exploding[0]]) //if month >=7 AND days >=corresponding day
    {
    	$newExpYear=$exploding[0]; //constant year
    }
    else
    {
    	$newExpYear=$exploding[0]; //else also same year
    }
    // var_dump($fiscalYear[2030]);
    $dynamicDay=$fiscalYear[$newExpYear];
echo $expiry= $newExpYear.'-'.'7'.'-'. $dynamicDay; 

?>
