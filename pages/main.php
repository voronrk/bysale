<?php
require_once('classes/Ads.php');

use Ads\Ads;

$dataForCards = Ads::getLast();

foreach($dataForCards as $dataForCard) 
{
    include('components/card.php');
}