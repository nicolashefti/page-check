<?php

include __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;

class PageCrawler
{
    public function __construct($url)
    {
        $html = file_get_contents($url);
        $this->crawler = new Crawler($html);
    }

    public function getTableNumber()
    {
        return $this->crawler->filter('table')->count();
    }

    public function getCourseNumber()
    {
        return $this->crawler->filter('table tr')->count();
    }

    public function getLastCourseName()
    {
        return $this->crawler
            ->filter('table tr')->last()
            ->filter('td')->first()->html();
    }
}

