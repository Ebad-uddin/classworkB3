<?php

// echo "Hello World " . "another statement <br>";

// // print "print statement" . "another";

// $str = "ebad";  //string
// echo "i am ".$str . "<br>";

// $age = 34;  //integer
// echo $age . "<br>";

// $percent = 2.4;     //float
// echo $percent . "<br>";
// $bool = true;
// echo var_dump($str) . "<br>";
// echo var_dump($age) . "<br>";
// echo var_dump($percent) . "<br>";
// echo var_dump($bool) . "<br>";

// //indexed array

// $num = array(1,3,5,6,7,8);  //first method 
// echo "<pre>";
// echo print_r($num);
// echo "</pre>";


// $str = ["Ebad", "Hassan", "Sameer", "Ali"];     //second method
// echo "<pre>";
// echo print_r($str);
// echo "</pre>";


    //third method
$fruits[0] = "Grapes";
$fruits[1] = "apple";
$fruits[2] = "Banana";
// echo "<pre>";
// echo print_r($fruits);
// echo "</pre>";

// Print array by using for loop 
echo "<h3> Printing array by using for loop</h3>";
for($i = 0; $i < count($fruits); $i++){
    echo "$i) $fruits[$i] <br>" ;
}


// while loop

// variable declaration
// while(condition){
    //statement
// }


echo "<h3> Printing array by using do-while loop</h3>";
// while($j < count($fruits)){
    //     echo "$fruits[$j] <br>";
    //     $j++;
    // }
    
    // do while
    
$j = 0;
do{
    echo "$fruits[$j] <br>";
    $j++;
}
while($j < count($fruits));

echo "<h3> Printing array by using forEach loop</h3>";


foreach($fruits as $val){
    echo "$val <br>";
}







// indexed array , associative array, multidimensional array

// associative array

$marks = array(
    "physics" => 45,
    "CS" => 100,
    "English" => 65
);

foreach($marks as $key => $val){
    echo "$key = $val <br>";
}

// echo $marks["physics"];
// print_r($marks);





































?>