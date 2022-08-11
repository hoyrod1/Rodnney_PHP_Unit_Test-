<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
    /** @test */
    public function getStatusFeatured()
    {
        $expectedResults = 'featured';

        $listingFeatured = new ListingFeatured();
        
        $results = $listingFeatured->getStatus();

        $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
    }
 
    /** @test */
    public function geCocReturnsExpectedResults()
    {
        $expectedResults = 'premium';

        $listingFeatured = new ListingFeatured();
        
        $results = $listingFeatured->getCoc();

        $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
    }  
    
    

}