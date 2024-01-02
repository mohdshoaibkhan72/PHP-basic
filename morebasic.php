<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php totorial </title>
    <style>
        *{
            margin:10px;
            
        }
.contaner{
    max-width:80%;
    background-color:grey;
    margin:auto;
    padding:23px;
    color:white;
}
    </style>
</head>
<body>
    <div class="contaner">
        <h1>Lets lern about php </h1>
    <p>you party status : </p>

<?php
$age=16;//chng is as require 
if($age>=18){
    echo "you can injoy the aprty";
}
else
echo"you canot go outside";
?>
</div>
    <?php
//  $langwage=array("pythone","cpp","php","nodejs");
// echo count($langwage);

// echo $langwage[1]
$a=0;
while($a<=10){
    echo" <br>the value is ";
    echo $a;

    $a++;
}


    ?>

</body>
</html>