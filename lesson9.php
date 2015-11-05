<?php //массивы arrays

$car[1] = "BMW"; // Название массива в виде переменной со скобками $ []
$car[2] = "X5"; // в скобках массива можно подставлять ключи в виде цифр .
$car[3] = "black";
$car[4] = "500 h";
$car[5] = "x drive";


print_r($car); // Функция вывода массивов print_r / в скобках переменная.

echo $car[1]; //выводим значение массива к примеру BMW.

echo "<br>";
//числовой массив!
$car2 = array(1 => "AUDI",2 => "3.0 diesel",3 => "white",4 => "300 h", 5 => "Sport");

print_r($car2);
echo $car2[2];

echo "<br>";

$car3 = array(
    "car_a"=> "Mersedes",            //Правильное написание массивов 
    "car_b" => "6.3 AMG", 
    "car_c" => "bluetec", 
    "car_d" => "700h", 
    "car_e" => "Sport",
    "country" => "Germany"
    ); // !!!Ассоциативный массив!!! Подставляем фразы типа name итд.

print_r($car3);
echo $car3["country"];
echo "<br><br>";

$car = array(           //В 1 массиве $car 3 массива

    "car1" => array(
                "car_a"      => "BMW", 
                "car_b"    => "X5",
                "car_c"    => "Black",
                "car_d"       => "500h",
                "car_e"      => "x drive"
                ),
    
    "car2" => array(
                "car_a"      => "AUDI", 
                "car_b"    => "3.0 diesel",
                "car_c"    => "white",
                "car_d"       => "300h",
                "car_e"      => "Sport"
                ),

    "car3" => array(
                "car_a"      => "Mersedes", 
                "car_b"    => "6.3 AMG",
                "car_c"    => "bluetec",
                "car_d"       => "700h",
                "car_e"      => "Sport",
                "country" => "Germany"
                )
);

echo "<pre>";
print_r($car);
echo "</pre><br>";

echo $car["car3"]["car_a"]; //Вывести имя ,можно с помощью замены массивов в скобках.

?>