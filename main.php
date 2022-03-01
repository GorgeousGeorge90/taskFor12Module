<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array task</title>
    <link rel="stylesheet" href="assets/css/style.css">
<body>
    <div class="flex-container">
        <div class="header">
            <div class="logo">
                <div class="logoText"> 
                    <h1>Обработка данных</h1>
                    <p>Практическая работа с массивами</p>
                </div>
                <div class="logoImg">
                <?php echo '<img src="assets/img/phplogo.png" width = "90">' ?>
                <?php echo '<img src="assets/img/biglogo.png" width = "180">' ?>
                </div>
            </div>
            <div class="navbar">
                <?php include 'assets/php/navbar.inc.php' ?>
            </div>
        </div>  
        <div class="mainContent">
            <div class="originList">
                <h3>Стартовый список людей:</h3>
                <?php include 'assets/php/originList.inc.php' ?>
            </div>
            <div>
                <div class="randomPerson">
                    <h3>Выбор случайного человека:</h3>
                    <?php include 'assets/php/randomPerson.inc.php' ?>
                </div>
                <div class="shortName">
                    <h3>Сокращенное имя:</h3>
                    <?php include 'assets/php/shortName.inc.php' ?>
                </div>
                <div class="randomPersonGender">
                    <h3>Пол:</h3>
                    <?php include 'assets/php/randomPersonGender.inc.php' ?>
                </div>
            </div>
            <div class="genderDescription">
                <h3>Опредедение гендерного состава:</h3>
                <?php include 'assets/php/genderDescription.inc.php' ?>
                <p>Мужчин: <?php echo "$statM%"?> </p>
                <p>Женщин: <?php echo "$statW%" ?> </p>
                <p>Невозможно определить: <?php echo "$statIt%" ?> </p>
            </div>
            <div class="perfectCoulpe">
                <h3>Cовместимость:</h3>
                <?php include 'assets/php/perfectCouple.inc.php' ?>
            </div>
            </div>
        </div>
        <div class="footer">
        <span id='fContent'>Gambit47@yandex.ru</span>
        </div>
    </div>
    <script src="assets/script/script.js"> </script>
</body> 
</html>