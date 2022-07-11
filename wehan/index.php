<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- exercise 1 -->
    <?php
    $name = '<h1>wehan<h1>';
    echo "hi i'm, $name";
    ?>
    <!-- exercise 2 -->
    <?php
    $name2 = 'wehan';
    $age = '18';
    $jobtitle = 'millionär';
    echo "hi, my name is $name2, and i am $age, and i work as a $jobtitle."
    ?>
    <!-- exercise 3 -->
    <?php
    $name3 = array ("Mark" , "John","Georg","Lisa");
    echo "the third player in the team is {$name3[2]}. <br>";
    ?>
    <!-- advance -->
    <?php
    $name4 = array ("disney"=>"Mickey Mouse", "nintendo"=>"Super Mario", "dragonball"=>"Goku", "pokemon"=>"Pokemon");
    echo  $name4['disney'].', ', $name4['nintendo'].', ',$name4['dragonball'].', ',$name4['pokemon'];
    ?> 
</body>
</html>