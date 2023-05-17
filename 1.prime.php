<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter a positive number</label>
        <input type="text" name="n">
        <input type="submit">
    </form>
    <?php
$num = $_POST["n"];
$result = "Prime Number";
for ($i=2; $i < $num; $i++) { 
    if($num%$i == 0){
        $result = "Not prime number";
        break;
    }
}
echo $result;
?>

</body>
</html>