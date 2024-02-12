<?php
 
   $num1=$_GET['num1'];
   $num2=$_GET['num2'];
   $op=$_GET['Operator'];

   switch ($op){
     case "none":
        $ans = "Select The Proper Answer";
        break;
     case "add":
        $ans = $num1 + $num2;
        break;
    case "sub":
        $ans = $num1 - $num2;
        break;
    case "div":
        $ans = $num1  / $num2;
        break;
    case "mul":
        $ans = $num1 * $num2;
        break;
   }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
    <table>
        <tr>
            <th> Select Your Answer: <span><?php echo $ans; ?></span> </th>
        </tr>
        <tr>
            <td><input type="text" name="num1" id="" <?php echo $num1; ?> placeholder="Enter Number"></td>
        </tr>
        <tr>
            <td><input type="text" name="num2" id="" <?php echo $num2; ?> placeholder="Enter Your Number"></td>
        </tr>
        <tr>
            <td><select name="Operator" id="">
                <option value="none">Select Your Operator</option>
                <option value="add">Addition</option>
                <option value="sub">Subtract</option>
                <option value="div">Division</option>
                <option value="mul">Multiply</option>
            </select></td>
        </tr>
        <tr>
            <td><input type="submit"  value="Calculator" name="" id=""></td>
        </tr>
    </table>
    </form>
</body>
</html>