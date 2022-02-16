<?php

$data = $_GET;
$correct = 0;
$answer = "Вы ответили: ";
$br = "<br>";

echo "Кто является президентом России?" . $br;
if ($data['vote'] == "Путин") {
  echo $answer . $data['vote'] . $br;
  echo "Вы получаете: 15 ₽" . $br;
  $correct++;
} else {
  echo $answer . $data['vote'] . $br;
  echo "Ваш ответ передан на рассмотрение в СК РФ" . $br;
}

echo "Сколько дней в високосном году?" . $br;
if ($data['leap'] == "366") {
  echo $answer . $data['leap'] . $br;
  $correct++;
} else {
  echo $answer . $data['leap'] . $br;
}

echo "Правильных ответов: " . $correct . " из 2";

?>
