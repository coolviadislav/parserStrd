<?php
require_once "vendor/autoload.php";

use Symfony\Component\DomCrawler\Crawler;

$url = 'https://www.strd.ru/kirpich/';

$html = file_get_contents($url);
$crawler = new Crawler($html);

$data = $crawler->filter('#page_head')->first()->text();

var_dump($data);