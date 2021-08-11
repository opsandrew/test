<?php

echo 'Чем отличаются запросы?'.'<br>';
echo '1. SELECT * FROM a, b WHERE a.id=b.a_id;'.'<br>';
echo '2. SELECT * FROM a JOIN b ON a.id=b.a_id;';
echo '<br><br><br>';

echo 'Технически выполнение данных запросов даст одинаковый результат. На современных СУБД потери в скорости не будет. С точки зрения культуры написания кода правильный - второй вариант.';
echo '<br>'.'<a href="http://test.cc68909.tmweb.ru/index.php">На главную</a>'.'<br>';