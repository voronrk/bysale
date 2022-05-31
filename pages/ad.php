<?php

use Ads\Ads;

$dataForCard = Ads::getById($adId);

include('components/card.php');