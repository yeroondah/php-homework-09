<?php

// Первый класс

class Friend 
{
    private $name;

    public function __construct($name)
    {
        $this -> name = $name;
    }

    public function friendsName()
    {
       return $friend = $this -> name;
    }
}

// Два объекта первого класса Friend

$friendChuck = new Friend('Чакки');
$friendMel = new Friend('Мэл');

// Второй класс

class VideoPlayers
{
    private $labelOne;
    private $labelTwo;
    private $priceOne;
    private $priceTwo; 

    public function __construct($labelOne, $labelTwo, $priceOne, $priceTwo)
    {
        $this -> labelOne = $labelOne;
        $this -> labelTwo = $labelTwo;
        $this -> priceOne = $priceOne;
        $this -> priceTwo = $priceTwo;
    }

    public function whichPriceLower()
    {
        if($this -> priceOne < $this -> priceTwo) {
            return $this -> labelOne;
        } elseif($this -> priceOne > $this -> priceTwo) {
            return $this -> labelTwo;
        } else {
            echo 'Оба товара стоят одинаково. Выберите другую пару для сравнения';
        }
    }

}

// три объекта второго класса VideoPlayers

$players = new VideoPlayers('Sony', 'BBK', '25000', '30000');
$playersTwo = new VideoPlayers('Sony', 'Samsung', '25000', '18000');
$playersThree = new VideoPlayers('Samsung', 'LG', '18000', '18000');


// третий класс

class TextEditor
{
    private $name = 'word';
    private $format;

    public function setFormat($format)
    {
        $this -> format = $format;
    }
}

// два объекта класса TextEditor

$formatTxt = new TextEditor('txt');
$formatJson = new TextEditor('json');

// четвёртый класс

class GraphicEditor
{
    private $name = 'Coral Draw';
    private static $format = 'cdr';

    public function staticFormat()
    {
        return self::$format;
    }

    public function staticName()
    {
        return self::$name;
    }
}

// два объекта класса GraphicEditor

$editorOne = new GraphicEditor();
$editorTwo = new GraphicEditor();

// пятый класс

class FixedDiscount
{
    private static $discountTen = 10;
    private static $discountFive = 5;

    public function calcDiscount($price)
    {
        if($price < 5000) {
            return $finalPrice = $price - $price*self::$discountFive/100;
        } else {
            return $finalPrice = $price - $price*self::$discountTen/100;
        }
    }
}

// два объекта класса FixedDiscount

$checkPriceOne = new FixedDiscount();
$checkPriceTwo = new FixedDiscount();

?>

<h2>Два объекта первого класса</h2>
<p>У меня есть друг по имени <?= $friendChuck -> friendsName(); ?>.</p>
<p>У меня есть друг по имени <?= $friendMel -> friendsName(); ?>.</p>

<h2>Три объекта второго класса</h2>
<p>Видео плеер марки <?= $players -> whichPriceLower(); ?> стоит дешевле.</p>
<p>Видео плеер марки <?= $playersTwo -> whichPriceLower(); ?> стоит дешевле.</p>
<p><?= $playersThree -> whichPriceLower(); ?></p>

<h2>Два объекта пятого класса</h2>
<p><?php echo $checkPriceOne -> calcDiscount(3200); ?> р.</p>
<p><?php echo $checkPriceTwo -> calcDiscount(6800); ?> р.</p>
