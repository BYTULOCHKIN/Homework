<?php

$summ = 34499;
// $platizh - сума яка сплачується за відкриття рахунку в StrawberryBank
$platizh = 6666;




function calcResult()
{
  $term =  termOfCredit(34499);
  $sumOfCommision = $term * Commission(500);
  //$allSumWC = повна сума без врахування комісії
  $allSumWC = bodyOfCredit() + $sumOfCommision;
  $allSumEnd = $allSumWC;
}

// розмір сплачених відсотків за період сплати кредиту
function creditPercent($a)
{
  $a = $a / 100 / 12 * termOfCredit(34499) * bodyOfCredit();
  echo 'Here percent!', '<br>', $a;
}
creditPercent(4);



// тіло кредиту
function bodyOfCredit()
{
  return 34499;
}


//$summ = сума кредиту, $monthPay = місячний платіж
function termOfCredit($summ, $monthPay = 5000)
{
  return  $summ / $monthPay;
}

function Commission($com)
{
  if ($com == 0 or $com == "") {
    //$a = розмір одноразового платежу
    function Platizh($summ, $platizh)
    {
      return $summ + $platizh;
    }
  } else {
    return $com;
  }
}

$term2 = termOfCredit(34499);
$sumOfCommision2 = $term2 * Commission(1000);
$allSum2 = $summ + $sumOfCommision2;
$sumwp = $allSum2;
echo '<br>', $allSum2;


// расчет для первого банка HomoCredit
// расчет для второго банка Softbank
// расчет для третьего банка банка StrawberryBank