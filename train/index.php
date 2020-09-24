<?php


// $body = розмір суми кредиту
//rate = процентна ставка
// monthCom = місячна комісія
//$ac = вартість відкриття рахунку 
function sumCredit($body, $rate, $monthCom, $ac)
{
  $termin = $body / 5000;
  $percentRate = $rate / 100 / 12 * $termin * $body;
  if ($monthCom != 0 or $monthCom != '' or $monthCom != null) {
    $comission = $monthCom * $termin;
  } else {
    $body += $ac;
    $termin = $body / 5000;
  }
  return  $percentRate + $comission + $body;
}

$HomoCreedit = round(sumCredit(34499, 4, 500, 0));
$Softbank = round(sumCredit(34499, 3, 1000, 0));
$StrawberryBank = round(sumCredit(34499, 2, 0, 6666));
echo '<br> ', $StrawberryBank;
