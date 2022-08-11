<?php

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    /** @test */
    public function getStatusPremium()
    {
        $expectedResults = 'premium';

        $listingPremium = new ListingPremium();
        
        $results = $listingPremium->getStatus();

        $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
    }
 
    /** @test */
    public function getDescriptionReturnsExpectedResults()
    {
        $expectedResults = 'premium';

        $listingPremium = new ListingPremium();
        
        $results = $listingPremium->getDescription();

        $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
    }  
    
    

}