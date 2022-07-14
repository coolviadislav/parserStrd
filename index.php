<?php
require('vendor/autoload.php');

use Symfony\Component\DomCrawler\Crawler;

$html = "https://www.strd.ru/kirpich/";

$crawler = new Crawler($html);

$name = $crawler->filter('p.crumbs')->first()->text();

var_dump($name);