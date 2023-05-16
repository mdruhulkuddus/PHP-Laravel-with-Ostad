<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HF-Calculator</title>
</head>
<body>
    <form action="" method="post">
        <label for="tutionFee">Enter Tution Fee: </label>
        <input type="number" name="tutionFee">
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
    if(isset($_POST['tutionFee']))
    {
        $tutionFee = $_POST['tutionFee'];
   
        $comission = ($tutionFee > 20000) ? $tutionFee*(25/100) :
                (($tutionFee > 10000) ? $tutionFee*(20/100) :
                (($tutionFee < 10000) && ($tutionFee > 7000)? $tutionFee*(15/100) :
                "invalid"));
               
                echo $comission;    
    }
    ?>

</body>
</html>