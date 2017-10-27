<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Email
 */
class PageCrawlerTest extends TestCase
{
    public function testTableNumber()
    {
        $pageCrawler = new PageCrawler('http://rdv-chl.lu/maternite/cours/1365/cycles');

        $this->assertEquals($pageCrawler->getTableNumber(), 1);
    }

    public function testCoursesNumber()
    {
        $pageCrawler = new PageCrawler('http://rdv-chl.lu/maternite/cours/1365/cycles');

        $this->assertEquals($pageCrawler->getCourseNumber(), 12);
    }

    public function testLastCourseName()
    {
        $pageCrawler = new PageCrawler('http://rdv-chl.lu/maternite/cours/1365/cycles');

        $this->assertEquals($pageCrawler->getLastCourseName(), 'Cycle 34F');
    }
}
