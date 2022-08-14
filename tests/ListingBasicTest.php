<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    protected $data = [];

    // /** @test */
    public function exceptionReturnAsExpectedMessageForUnavailableData(): void
    {

        $this->expectExceptionMessage('Unable to create a listing, data unavailable');

        $exceptionTest = new ListingBasic();

    }
 
    // /** @test */
    public function exceptionReturnAsExpectedMessageForInvaildId(): void
    {


        $this->expectExceptionMessage('Unable to create a listing, invalid id');

        $this->data = ['title' => 'Test Exception'];
        $exceptionTest = new ListingBasic($this->data);

    }  
    
    // /** @test */
    public function exceptionReturnAsExpectedMessageForInvaildTitle(): void
    {


        $this->expectExceptionMessage('Unable to create a listing, invalid title');

        $this->data = ['id' => 1];
        $exceptionTest = new ListingBasic($this->data);

    }      

    // /** @test */
    public function objectCreatedWithValidAurguments()
    {
        $this->data = ['id' => "1", "title" => "First Test"];
        $ListingBasic = new ListingBasic($this->data);
        
        $this->assertInstanceOf('ListingBasic', $ListingBasic);
    }
    
    /** @test */
    public function getStatusIsBasic()
    {
        $expectedResults = 'basic';
        $this->data = ['id' => "1", "title" => "First Test"];
        $ListingBasic = new ListingBasic($this->data);
        
        $results = $ListingBasic->getStatus();

        $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
    }

        /** @test */
        public function getMethodReturnId()
        {
            $expectedResults = 1;
    
            $this->data = ['id' => "1", "title" => "First Test"];
            $ListingBasic = new ListingBasic($this->data);
            
            $results = $ListingBasic->getId();
    
            $this->assertEquals($expectedResults, $results, "The getId method does not return basic");
        }

        /** @test */
        public function getMethodReturnTitle()
        {
            $expectedResults = 'First Test';
    
            $this->data = ['id' => "1", "title" => "First Test"];
            $ListingBasic = new ListingBasic($this->data);
            
            $results = $ListingBasic->getTitle();
    
            $this->assertEquals($expectedResults, $results, "The getTitle method does not return basic");
        }

        /** @test */
        public function getMethodReturnWebsite()
        {
            $expectedResults = 'http://www.teamtreehouse.com';
            
            $this->data = ['id' => "1", 
                           "title" => "First Test", 
                           'website' => 'http://www.teamtreehouse.com',
                           'email' => '',
                           'twitter' => '',
                           'status' => ''
                           ];
            $ListingBasic = new ListingBasic($this->data);
            
            $results = $ListingBasic->getWebsite();
    
            $this->assertEquals($expectedResults, $results, "The getWebsite method does not return basic");
        }
 
         /** @test */
         public function getMethodReturnEmail()
         {
            $expectedResults = 'teamtreehouse@test.org'; 

            $this->data = ['id' => "1", 
                           "title" => "First Test", 
                           'website' => 'http://www.teamtreehouse.com',
                           'email' => 'teamtreehouse@test.org',
                           'twitter' => 'twitter.com/teamtreehouse',
                           'status' => 'basic'
                           ];
            $ListingBasic = new ListingBasic($this->data);
             
            $results = $ListingBasic->getEmail();
     
             $this->assertEquals($expectedResults, $results, "The getEmail method does not return basic");
         } 
         
        /** @test */
        public function getMethodReturnTwitter()
        {
            $expectedResults = 'twitter.com/teamtreehouse';
    
            $this->data = ['id' => "1", 
                           "title" => "First Test", 
                           'website' => 'http://www.teamtreehouse.com',
                           'email' => 'teamtreehouse@test.org',
                           'twitter' => 'twitter.com/teamtreehouse',
                           'status' => 'basic'
                           ];
            $ListingBasic = new ListingBasic($this->data);
            
            $results = $ListingBasic->getTwitter();
    
            $this->assertEquals($expectedResults, $results, "The getTwitter method does not return basic");
        }   
        
         /** @test */
         public function getToArrayMethodReturnArray()
         {
     
            $this->data = ['id' => "1", 
                           "title" => "First Test", 
                           'website' => 'http://www.teamtreehouse.com',
                           'email' => 'teamtreehouse@test.org',
                           'twitter' => 'twitter.com/teamtreehouse',
                           'status' => 'basic'
                           ];

            $expectedResults = $this->data;
                           
            $ListingBasic = new ListingBasic($this->data);
             
            $results = $ListingBasic->toArray();
     
             $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
         }          
    
}