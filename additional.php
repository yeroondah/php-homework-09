<?php
    class News
    {
        private $firstNews = 'Первая новость';
        private $secondNews = 'Вторая новость';
        private $thirdNews ='Третья новость';

        public function showNews($newsNumber)
        {
            switch($newsNumber) {
                case $newsNumber == 1:
                    return $this -> firstNews;
                case $newsNumber == 2:
                    return $this -> secondNews;
                case $newsNumber == 3:
                    return $this -> thirdNews;
                default:
                    return $noNews = 'Простите, такого номера нет. Введите номер статьи или новости.';
            }
        }
    }

    $newsClass = new News();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>News</title>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>

        <form action = "additional.php" method = "post">
            <input type="text" name="number">
            <input type = "submit" value = "Открыть новость">
        </form>

        <?php
            if(empty($_POST['number'])) { ?>
                <h2>Введите номер статьи или новости.</h2>

        <?php
            } elseif(is_numeric($_POST['number'])) {
                $newsNumber = $_POST['number']; ?>
                <h2><?php echo $newsClass -> showNews($newsNumber); ?></h2>

        <?php
            } else { ?>
                <h2>Неверный номер новости. Введите номер статьи или новости.</h2>
      <?php } ?>
    </body>
</html>