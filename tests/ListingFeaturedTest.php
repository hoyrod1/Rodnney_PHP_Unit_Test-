<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
    protected $data = array();
    protected $listingFeatured;
    protected $results;

    /** @test */
    public function getStatusFeatured()
    {
        $expectedResults = 'featured';
    
        $this->data = ['id' => "3", 
                       "title" => "First Test", 
                       'website' => 'http://www.teamtreehouse.com',
                       'email' => 'teamtreehouse@test.org',
                       'twitter' => 'twitter.com/teamtreehouse',
                       'description' => 'This test is specifically for the premuim members. This section allows premium members to access premium services',
                       'coc' => 'One for All Events proudly stands by our long tradition of providing safe, secure, and productive environments at all of our events. We want to provide a welcoming experience to all attendees, old and new, and enjoy the great hospitality that the community has to offer together.'                       
                        ];

        $this->listingFeatured = new ListingFeatured($this->data);
        
        $this->results = $this->listingFeatured->getStatus();

        $this->assertEquals($expectedResults, $this->results, "The getStatus method does not return featured status");
    }
 
    /** @test */
    public function geCocReturnsExpectedResults()
    {
        $this->data = ['id' => "3", 
                       "title" => "First Test", 
                       'website' => 'http://www.teamtreehouse.com',
                       'email' => 'teamtreehouse@test.org',
                       'twitter' => 'twitter.com/teamtreehouse',
                       'description' => 'This test is specifically for the premuim members. This section allows premium members to access premium services',
                       'coc' => 'One for All Events proudly stands by our long tradition of providing safe, secure, and productive environments at all of our events. We want to provide a welcoming experience to all attendees, old and new, and enjoy the great hospitality that the community has to offer together.'                       
                        ];
        
        $expectedResults = $this->data['coc'];                

        $this->listingFeatured = new ListingFeatured($this->data);
        
        $this->results = $this->listingFeatured->getCoc();

        $this->assertEquals($expectedResults, $this->results, "The getCoc method does not return expected results");
    }  
    
    

}