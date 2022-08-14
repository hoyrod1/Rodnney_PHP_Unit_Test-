<?php

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    protected $data = array();
    protected $ListingPremium;
    protected $results;

    /** @test */
    public function getStatusPremium()
    {
        $expectedResults = 'premium';
    
        $this->data = ['id' => "3", 
                       "title" => "First Test", 
                       'website' => 'http://www.teamtreehouse.com',
                       'email' => 'teamtreehouse@test.org',
                       'twitter' => 'twitter.com/teamtreehouse',
                       'description' => 'This test is specifically for the premuim members. This section allows premium members to access premium services'
                       ];

        $this->ListingPremium = new ListingPremium($this->data);
        
        $this->results = $this->ListingPremium->getStatus();

        $this->assertEquals($expectedResults, $this->results, "The getStatus method does not return premium");
    }
 
    /** @test */
    public function getDescriptionReturnsExpectedResults()
    {
        // $expectedResults = 'This test is specifically for the premuim members. This section allows premium members to access premium services';
    
        $this->data = ['id' => "3", 
                       "title" => "First Test", 
                       'website' => 'http://www.teamtreehouse.com',
                       'email' => 'teamtreehouse@test.org',
                       'twitter' => 'twitter.com/teamtreehouse',
                       'description' => ''
                       ];

        $expectedResults = $this->data['description'];               

        $this->listingPremium = new ListingPremium($this->data);
        
        $results = $this->listingPremium->getDescription();

        $this->assertEquals($expectedResults, $results, "The getDescription method does not return expected description");
    }  
    
    
}