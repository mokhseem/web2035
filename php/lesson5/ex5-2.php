<?php

/* Функция вычисления факториала натурального числа */

function secret($n) {
  if ($n > 0)
    return $n * secret($n-1);
  return 1;
}

echo secret(8);

?>
