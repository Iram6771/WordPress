/*Write a program which checks different numbers equivalent to a variable and gives number as output.
 Perform it using ifelse statement.*/
$m = 5; //a is a variable and 5 is an integer value assigned to it.

if($m==1) //First condition
echo "The num is One"; //If first condition is true it will print this statement.
else if ($m==2)  //if first condition is not true the this codition will be checked.
echo "The num is Two"; //and this statement will be printed.
else if ($m==3)
echo "The num is Three";
else if ($m==4)
echo "The num is Four";
else if ($m==5)
echo "The num is Five<br>";
else                          //If all the above conditions aren't true then the message in else statement will be printed.
echo "Your numb is greater than 5.";

?>



<?php

$k = 6;

switch ($k){   //variable(expression) is assigned to switch statement.
    case "1":  //This is first case and the value assigned to it is called the label of this case.
        echo "The num is One";  //If case 1 is true then this statement will be printed.
        break;            //after the case one being true the break keyword will breaks out of the switch block and other cases will not be checked.
    case "2":
        echo "The num is Two";//If case 2 is true then this statement will be printed.
        break;             //after the case 2 being true the break keyword will breaks out of the switch block and other cases will not be checked.
    case "3":
        echo "The num is Three";//If case 3 is true then this statement will be printed.
        break;               //after the case 3 being true the break keyword will breaks out of the switch block and other cases will not be checked.
    case "4":
        echo "The num is Four";//If case 4 is true then this statement will be printed.
        break;                 //after the case 4 being true the break keyword will breaks out of the switch block and other cases will not be checked.
    case "5":
        echo "The num is Five";//If case 5 is true then this statement will be printed.
        break;                   //after the case 5 being true the break keyword will breaks out of the switch block and other cases will not be checked.
    default:    //If there is no matching case then this statement will be executed.
    echo "Your num is greater than 5.";
    
   
}
?>
