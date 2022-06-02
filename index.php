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
            <h2>Оберіть кількість води, мл</h2>
            <p>
            <input type="range" name="water" value="50" min="50" max="1000" step="50" oninput="this.nextElementSibling.value =this.value">
            <input type="text" oninput="this.previousElementSibling.value =this.value" value="50">
            </p>

            <h2>Оберіть кількість цукру</h2>
            <p>
            <input type="range" name="shugar" value="0" min="0" max="10" step="0.5" oninput="this.nextElementSibling.value =this.value">
            <input type="text" oninput="this.previousElementSibling.value =this.value">
            </p>
            <input type="submit" value="Замовити">

            <input type="hidden" name="cup" value="0">
            
            
            


            

    

    </form>
</body>
</html>