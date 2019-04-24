<!DOCTYPE html>
<html>
    <head>
    <title>
        Result
    </title>
    <link rel="stylesheet" href="css/styleindex.css"/>
    </head>
    <body>
        <?php 
//Question 1 starts
function q1($first, $second)
{
    echo "The sum of the numbers would be ".($first + $second);
}
//Question 1 ends as Question 2 starts
function q2($first, $second)
{
    echo "The product of the numbers would be ".($first * $second);
}
//Question 2 ends as Question 3 starts
function q3($first, $second)
{
    echo "The Sum of the numbers would be ".($first + $second);
     echo "<br>The Difference of the numbers would be ".($first - $second);
     echo "<br>The product of the numbers would be ".($first * $second);
     echo "<br>The ratio of the numbers would be ".($first / $second);
}
//Question 3 ends as Question 4 starts
function q4($x, $y)
{
    $result =$x**5 + 2 * $x * $y + $y**2;
    echo "The answer would be $result";
}
//Question 4 ends as Question 5 starts
function q5($p,$t,$r)
{
    $i = $p * $t * $r / 100;
    echo "The simple interest SI = $i";
}
function q6($l, $b)
{
    $a = $l * $b;
    echo "The area of the rectangle is: $a";
}
function q7($r)
{
    define("pi","3.14");
    $a = pi * $r**2;
    echo "The area of the circle is: $a";
}
function q8($first, $second)
{
    if($first>$second)
        $second = $first;
    echo "$second is the largest number";
}
function q9($first, $second)
{
    if($first<$second)
        $second = $first;
    echo "$second is the smallest number";
}
function q10($first,$second,$third)
{
    if($first > $second && $first > $second)
        $third = $first;
    elseif($second>$third)
        $third = $second;
    echo "The largest number is $third";
}
function q11($first,$second,$third)
{
    if($first < $second && $first < $second)
        $third = $first;
    elseif($second<$third)
        $third = $second;
    echo "The smallest number is $third";
}
function q12($num)
{
    echo "The number is ";
    if ($num%2==0)
        echo "even";
    else
        echo "odd";
}
function q13($num)
{
    echo "The number is ";
    if ($num%7!=0)
        echo "not ";
    echo "divisible by 7";
}
function q14($num)
{
    if($num%10==0)
        echo "The number is exactly divisible by 5 and 10";
    else 
        echo"The number is not divisible by 5 or 10";
}
function   q15($num)
{
    if($num%7==0 && $num%13==0)
        echo "The number is divisible by both 7 and 13.";
    elseif($num%7==0)
        echo "The number is divisible by 7 but not 13";
    elseif($num%13==0)
        echo "The number is divisible by 13 but not 7";
    else
        echo "The number is divisible by neither 7 nor 13.";
}
function q16($cp, $sp)
{
    $amt = abs($cp-$sp);
    if($cp > $sp)
        echo "It is a profit";
    else
        echo "It is a loss";
    echo " of rs $amt";
}
function q17()
{
    for ($i = 1; $i<=10; $i++)
        echo "$i <br>";
}
function q18()
{
    for ($i = 5, $sum = 0; $i<=100; $sum+=($i++))
    {}
    echo "The sum of the series is $sum";
}
function q19()
{
    $run = 5;
    $sum = 0;
    $run2 = 1;
    $run3 = 100;
    $inc = 3;
    while ($run<50)
    {
        echo "$run, ";
        $sum += $run;
        $run += 5;
    }
    echo "<br> The sum of the series is $sum <br>";
    for ($i = 1, $sum = 0; $i <= 20; $i++)
    {
        echo "$run2, ";
        $sum += $run2;
        $run2 += $inc++;
    }
    echo "<br> The sum of the series is $sum <br>";
    for ($i = 1,$sum= 0; $i <10; $i++)
    {
        echo "$run3, ";
        $sum += $run3;
        $run3 -= 2;
    }
    echo "<br> The sum of the series is $sum.";
}
function q20()
{
    for($i = 1; $i<=15;$i++)
        echo ($i * 2).", ";
}
function q21()
{
    $i = 1;
    $sum = 0;
    while ($i < 100)
    {
        $sum += $i;
        $i += 2;
    }
    echo "The sum of the odd numbers ranging between 1 and 100 is $sum";
}
function q22($num)
{
    $fac = 1;
    while($num)
        $fac =$fac*  $num--;
    echo "The factorial of the number is $fac";
}
function q23()
{
    $a = 0;
    $b = 1;
    for ($i = 1; $i <= 15; $i++){
        $c = $a + $b;
        echo "$c, ";
        $b = $c;
        $a = $b;
    }
}
function q24()
{
    for ($i = 0; $i <5; $i++)
    {
        for ($j = 0; $j<=$i ; $j++)
            echo "* ";
        echo "<br>";
    }
    for ($i = 0; $i< 5; $i++)
    {
        for ($j = 1; $j <= $i; $j++)
            echo " ";
        for ($k = 5-$i; $k; $k-- )
            echo "*";
    }
    for ($i = 1; $i <= 5; $i ++)
    {
        for ($k = 1; $k <= $i; $k++)
            echo $i;
        echo "<br>";
    }
    for ($i = 1; $i <= 5; $i ++)
    {
        for ($k = 1; $k <= $i; $k++)
            echo $k;
        echo "<br>";
    }
}
function q25($num)
{
    for ($i = 2; $i<= $num/2; $i++)
    {
        if ($num % $i == 0){
            echo "The number is composite";
            exit();
        }
    }
        echo "The number is prime";
}
function q26()
{
    for ($num = 2; $num <= 100; $num++){
    for ($i = 2,$t = 0; $i<= $num/2; $i++)
    {
        if ($num % $i == 0){
            $t++;
            break;
        }
    }
        if ($t)
            continue;
        echo $num.", ";
}
}
function q27($f,$s,$t,$fo)
{
    $max = $f  > $s && $f > $t && $f >$fo ? $f : ($s>$t && $s > $fo? $s: ($t > $fo? $t : $fo));
    echo "The largest number is : $max";
}
function q28($first,$sec,$ch)
{
    switch ($ch)
    {
        case 1:
            echo "The sum of the numbers is: ".($first+$sec);
            break;
        case 2:
            echo "The difference of the numbers is: ".($first+$sec);
            break;
        case 3:
            echo "The product of the numbers is: ".($first+$sec);
            break;
        case 4:
            echo "The division reslts: ".($first+$sec);
            break;
        default:
            echo "Please don't forget to type your choice in the <b><font color = 'red'>third input box</font></b> in  index.html.<br> 1 for addition <br> 2 for subtraction <br>3 for multiplication <br> 4 for division.<br><font color = 'red'>ERROR</font>You either provided wrong choice or didn't provide any choice at all.";
    }
}
function q29($a,$b,$c,$d)
{
    $arr = array($a,$b,$c,$d);
    asort($arr);
    echo "The sorted form of the array is: ";
    foreach($arr as $item)
        echo $item.", ";
}
function q30($num)
{
    echo "<table border = 1>";
        for ($row = 1; $row <= 10; $row++)
            echo "<tr><td>$num</td><td>$row</td><td>".($row*$num)."</td></tr>";
}
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];

switch ($_POST['drive'])
{
    case 1:
        q1($num1,$num2);
        break;
    case 2:
        q2($num1,$num2);
        break;
    case 3:
        q3($num1,$num2);
        break;
    case 4:
        q4($num1,$num2);
        break;
    case 5:
        q5($num1,$num2,$num3);
        break;
    case 6:
        q6($num1,$num2);
        break;
    case 7:
        q7($num1);
        break;
    case 8:
        q8($num1,$num2);
        break;
    case 9:
        q9($num1,$num2);
        break;
    case 10:
        q10($num1,$num2,$num3);
        break;
    case 11:
        q11($num1,$num2,$num3);
        break;
    case 12:
        q12($num1);
        break;
    case 13:
        q13($num1);
        break;
    case 14:
        q14($num1);
        break;
    case 15:
        q15($num1);
        break;
    case 16:
        q16($num1,$num2);
        break;
    case 17:
        q17();
        break;
    case 18:
        q18();
        break;
    case 19:
        q19();
        break;
    case 20:
        q20();
        break;
    case 21:
        q21();
        break;
    case 22:
        q22($num1);
        break;
    case 23:
        q23();
        break;
    case 24:
        q24();
        break;
    case 25:
        q25($num1);
        break;
    case 26:
        q26();
        break;
    case 27:
        q27($num1,$num2,$num3,$num4);
        break;
    case 28:
        q28($num1,$num2,$num3);
        break;
    case 29:
        q29($num1,$num2,$num3,$num4);
        break;
    case 30:
        q30($num1);
        break;
}
 ?>
    </body>
</html>
