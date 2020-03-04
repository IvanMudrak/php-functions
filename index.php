<?php
/*echo '<h1 style="color:green">5.21.  Напечатать  таблицу  стоимости  50,  100,  150, ...,  1000 г  сыра  (стоимость  1 кг
сыра вводится с клавиатуры).<br/></h1>';
$cost = rand(200,300);
echo'стоимость сыра за кг = '.$cost.'<br/>';
$x = 0;
for ($i = 50; $i <= 1000; $i++) {
    if($i%50 == 0){

        $x = $cost*$i/1000;
        echo $i.'гр. сыра стоит '.$x.'<br/>';
    }
}*/


/*echo '<h3 style = color:forestgreen>10.2 Рассчитать значение y, определив и использовав необходимую функцию:</h3><br/>';

function valueY($x){
    if($x == 'a') {
      return $y = ((1 + sin(1)) / 3) + ((5 + sin(5)) / 3) + ((3 + sin(3)) / 3);
    }elseif($x == 'b') {
        return $y = ((2 + sin(2)) / sin(5) + 5) + ((6 + sin(6)) / sin(3) + 3) + ((1 + sin(1)) / sin(4) + 4);
    }elseif($x == 'c') {
        return $y = ((1 + sin(4)) / 4 + sin(1)) + ((7 + sin(5)) / sin(7) + 5) + ((3 + sin(2)) / sin(4) + 2);
    }elseif($x == 'd'){
    return $y = ((2 + sin(3)) / 3 + sin(2)) + ((1 + sin(5)) / sin(1) + 5) + ((4 + sin(7)) / sin(3) + 7);
    }
}

$x = valueY('c');
echo $x;*/

echo '<h3 style = color:forestgreen>10.7.    Даны основания и высоты двух равнобедренных трапеций. Найти сумму их 
периметров.  (Определить  функцию  для  расчета  периметра  равнобедренной 
трапеции по ее основаниям и высоте.)</h3><br/>';

function perimeter($upper_base,$bottom_base,$height)
{
    $cathet = ($bottom_base - $upper_base) / 2;
    $hypotenuse = sqrt(($height ** 2) + ($cathet ** 2));
    return $p = round(($hypotenuse * 2 + $upper_base + $bottom_base), 3);
}

$upper_base = rand(1, 5);
echo'верхнее основание первой трапеции = '.$upper_base.'<br/>';
$bottom_base = rand(7, 13);
echo'нижнее основание первой трапеции = '.$bottom_base.'<br/>';
$height = rand(4, 10);
echo'высота трапеции = '.$height.'<br/>';


echo'Периметр первой трапеции = ';
$p1 = perimeter($upper_base,$bottom_base,$height);
echo $p1.'<br/><br/>';


$upper_base = rand(1, 5);
echo'верхнее основание второй трапеции = '.$upper_base.'<br/>';
$bottom_base = rand(7, 13);
echo'нижнее основание второй трапеции = '.$bottom_base.'<br/>';
$height = rand(4, 10);
echo'высота трапеции = '.$height.'<br/>';


echo'Периметр второй трапеции = ';
$p2 = perimeter($upper_base,$bottom_base,$height);
echo $p2.'<br/><br/>';

echo'Сумма периметров трапеций = ';
echo $sum = $p1 + $p2;