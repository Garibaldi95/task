<form action="" method="post">
<?php

//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'tasks'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);

$query = "SELECT* FROM taskbook";

//Делаем запрос к БД, результат запроса пишем в $result:
$result = mysqli_query($link, $query) or die(mysqli_error($link));


//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
Foreach($data as $key => $item):?>
    <input name="update" value="<?=$item['Task']?>">  <?=$item['id'].'.' . $item['Task']?></input><input type="submit" name="task" value="<?=$item['id']?>"><br>
    <?php
endforeach;
if(isset($_POST['task'])){

     $delete = $_POST['task'];
     $sql = "DELETE FROM taskbook where id = '$delete'";
     $upd = "DELETE FROM taskbook where id = '$delete'";

    mysqli_query($link, $sql,) or die(mysqli_error($link));
}