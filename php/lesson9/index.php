<?php

// переменные доступа к бд
$servername = "localhost";
$database = "newdatabase";
$username = "root";
$password = "";

// инициация соединения
$data = mysqli_connect($servername, $username, $password, $database);

// проверка соединения
if (!$data) {
  die("<i>ЕГГОГ</i>" . mysqli_connect_error());
}

// запрос к бд
$sql_query = 'SELECT * FROM zakaz';
$result = mysqli_query($data, $sql_query);

// вывод
while ($row = mysqli_fetch_array($result)) {
  print_r("<table border=1>
    <tr>
      <th>&numero;</th>
      <th>Имя</th>
      <th>Фамилия</th>
      <th>E-mail</th>
      <th>Товар</th>
      <th>Кол-во</th>
    </tr>
    <tr>
      <td>" . $row['id'] . "</td>
      <td>" . $row['name'] . "</td>
      <td>" . $row['fam'] . "</td>
      <td>" . $row['email'] . "</td>
      <td>" . $row['tovar'] . "</td>
      <td>" . $row['col'] . "</td>
    </tr>");
}

// завершение соединения
mysqli_close($data);

?>
