<?php
 getPriceLazizbekAmrillaev($Price = 856846.7821659);

 $Currency = "CZK";

 function getPriceLazizbekAmrillaev(float $Price, string $Currency = "CZK"): string{

    echo number_format($Price,2,","," ");
    return $Price." ".$Currency;

 }
 echo" ",$Currency;
 ?>