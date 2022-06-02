<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заварювання чаю</title>
</head>
<body>
    
    <form method="POST" action="tea.php">
        
        <?php
        if ($_POST) {
            $water = $_POST['water'];
            $shugar = $_POST['shugar'];
            $cup = 1;
    

            $sugarInOneCup = $shugar / $water * 50; //цукор на 50 мл води 
            $sugarOfCup = 0;
            
            
            echo ("<h2> Ваше замовлення </h2>");
            echo ("<p>Water ".$water ."</p>Shugar ".$shugar);
        
            echo ("<p>Чайник закипів</p>");

            while ($water > 0) { 
                for ($i = 50; $water > 0 && $i <= 250; $i +=50, $water -= 50, $sugarOfCup += $sugarInOneCup) {
                    echo ("<p>Налито $i мл води</p>");
                }
                    echo ("<p>Насипано ".round ($sugarInOneCup)." ч.л. цукру</p>");
                    $teaInCup = (2/250) * $i;
                    echo ("<p>Опускаємо чайний пакетик на ".round ($teaInCup) ." хв</p>");
                    echo ("<p>Розмішуємо</p>");


                if ($water == 0) {
                    echo ("<p>Вода закінчилась</p>");
                } else { 
                    echo ("<p>Кружка повна</p>");

                }
                if ($water > 0) {
                    echo ("беремо наступну кружку");
                }
            }
                echo("<p>Смачного чаювання!</p>");
        }
        
               
        

    ?>
    
    <input type="hidden" name="water" value="<?php echo($water); ?>">
    <input type="hidden" name="shugar" value="<?php echo($shugar); ?>">
    

    
</body>
</html>