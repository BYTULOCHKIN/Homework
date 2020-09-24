<?php
echo '<pre>';
//змінна $maxplatizh яка потім буде 
//оголошена глобальною для доступу до неї функціям
$maxPlatizh = 5000;
// $body = розмір суми кредиту
//rate = процентна ставка
// monthCom = місячна комісія
//$ac = вартість відкриття рахунку 
function sumCredit($body, $rate, $monthCom, $ac)
{
  global $maxPlatizh;
  if ($monthCom != 0 or $monthCom != '' or $monthCom != null) {
    $termin = $body / $maxPlatizh;
  } else {
    $body += $ac;
  }
  if ($monthCom != 0 or $monthCom != '' or $monthCom != null) {
    $comission = $monthCom * $termin;
  } else {
    $termin = $body / $maxPlatizh;
  }
  $percentRate = $rate / 100 / 12 * $termin * $body;
  $a = $percentRate + $comission + $body;

  return  $a;
}

// функція для розрахунку терміну за який буде повернуто банку кредит
// $a = число отримане в результаті роботи функції sumCredit()
function Period($a)
{
  global $maxPlatizh;
  return $a / $maxPlatizh;
}

// результат роботи функції для розрахунку кінцевої суми
$HomoCredit_sum = round(sumCredit(34499, 4, 500, 0));
$Softbank_sum = round(sumCredit(34499, 3, 1000, 0));
$StrawberryBank_sum = round(sumCredit(34499, 24, 0, 6666));
/*
echo '<b>', $HomoCreedit_sum, '<b>', '<br>';
echo '<b>', $Softbank_sum, '<b>', '<br>';
echo '<b>', $StrawberryBank_sum, '<b>', '<br>';
*/


$HomoCredit_period = ((Period(38742)));
$Softbank_period = ((Period(41994)));
$StrawberryBank_period = ((Period(47943)));

// масив з даними отриманими в результаті роботи функцій

$mainArray = [
  ['all_sum' => $HomoCredit_sum, 'period' => $HomoCredit_period],
  ['all_sum' => $Softbank_sum, 'period' => $Softbank_period],
  ['all_sum' => $StrawberryBank_sum, 'period' => $StrawberryBank_period],
];

//змінні створені для поміщення значень з ключів 'all_sum' та 'period' в новий масив
$all_sumFilter =  array_column($mainArray, 'all_sum');
$periodFilter = array_column($mainArray, 'period');
  //print_r($all_sumFilter);
$maxOfSum =  max($all_sumFilter); 
$maxOfPeriod = max($periodFilter);



echo 'Лучшим вариантом является кредит от:',  
echo '</pre>';
