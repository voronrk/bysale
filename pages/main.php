<?php

use Ads\Ads;

$dataForCards = Ads::getAll();

foreach($dataForCards as $dataForCard) 
{
    include('components/card.php');
}