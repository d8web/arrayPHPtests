<?php
// Retorna o número de dias em um mês para um determinado ano e calendário
// https://www.php.net/manual/en/function.cal-days-in-month.php
$number = cal_days_in_month(CAL_GREGORIAN, 8, 2003); // 31
echo "There were {$number} days in August 2003";
?>