<?php
//Создаю массив случайных чисел

echo 'Каждый раз при обновлении страницы генерируется новый массив!'.'<br>';
$n = 100;
for ($i=0;$i<=$n;$i++){
    print_r($ar[$i] = rand(1,9)." ");
}

$count=0;
for($i=0;$i<$n;$i++)
{
    if ($ar[$i] == $ar[$i+1]){
        $count++;
        $array[$ar[$i]] = $count;
    }
}
foreach ( $array as $key => $value ) {
  echo '<br>'.'Значние '.$key.' повторяется '.$value.' раз'.'<br>';
}
echo '<br>'.'<a href="http://test.cc68909.tmweb.ru/index.php">На главную</a>'.'<br>';

echo '<br>'.'<a href="https://github.com/opsandrew/test/blob/master/string.php">Репозиторий</a>'.'<br>';