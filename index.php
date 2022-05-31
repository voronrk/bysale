<?php

require_once('classes/Ads.php');

$adId = $_GET['ad'];

include('templates/head.php');
include('templates/header.php');
if ($adId) {
    include('pages/ad.php');    
} else {
    include('pages/main.php');
};
include('templates/footer.php');
