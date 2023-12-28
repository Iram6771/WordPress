<?php
//Write a function that prints any table by given parameter. Try to use while loop within the function.
function Table_of($Num)  //function name with attribute Num that holds the table number.
{
$count=1;         //initializer
echo "Table of {$Num}<br>";   //This statement will print before each table is called.
while($count<=15){              //while loop containing ending value.
    $output =$Num*$count;        //Output of the table
    echo "$Num * $count = $output <br>";         //Formula to print table
    $count++;                                   //Increment operator
    }
}
Table_of(4);                                  //Function called for the first time
Table_of(6);                                  //Function called for the Second time
Table_of(9);                                  //Function called for the third time

?>