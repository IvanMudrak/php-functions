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


echo '<h3 style = color:forestgreen>10.2 Рассчитать значение y, определив и использовав необходимую функцию:</h3><br/>';

function first($a,$b){
    return $y = (($a + sin($a)) / $b);
}

function second($a,$b){
    return $y = (($a + sin($a)) / sin($b) + $b);
}

function third($a,$b){
    return $y = (($a + sin($b)) / $b + sin($a));
}

function fourth($a,$b){
    return $y = (($a + sin($b)) / sin(($a-1)) + $b);
}
$one = rand(2,10);
$two = rand(1,10);
$a = round(first($one,$two) + first($one,$two) + first($one,$two), 2);
echo ' a) y = '.$a.'<br/>';

$b = round(second($one,$two) + second($one,$two) + second($one,$two), 2);
echo ' b) y = '.$b.'<br/>';

$c = round(third($one,$two) + third($one,$two) + third($one,$two), 2);
echo ' c) y = '.$c.'<br/>';

$d = round(third($one,$two) + third($one,$two) + fourth($one,$two), 2);
echo ' d) y = '.$d.'<br/>';




/*echo '<h3 style = color:forestgreen>10.7.    Даны основания и высоты двух равнобедренных трапеций. Найти сумму их
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
echo $sum = $p1 + $p2;*/