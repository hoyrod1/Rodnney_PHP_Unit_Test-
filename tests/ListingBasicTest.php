<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    protected $data = [];

    /** @test */
    public function exceptionReturnAsExpectedMessageForUnavailableData(): void
    {

        $this->expectExceptionMessage('Unable to create a listing, data unavailable');

        $exceptionTest = new ListingBasic();

    }
 
    /** @test */
    public function exceptionReturnAsExpectedMessageForInvaildId(): void
    {


        $this->expectExceptionMessage('Unable to create a listing, invalid id');

        $this->data = ['title' => 'Test Exception'];
        $exceptionTest = new ListingBasic($this->data);

    }  
    
    /** @test */
    public function exceptionReturnAsExpectedMessageForInvaildTitle(): void
    {


        $this->expectExceptionMessage('Unable to create a listing, invalid title');

        $this->data = ['id' => 1];
        $exceptionTest = new ListingBasic($this->data);

    }      

    // /** @test */
    // public function objectCreatedWithValidAurguments()
    // {
    //     $data = ["1", "First Test"];
    //     $ListingBasic = new ListingBasic();
        
    //     $this->assertInstanceOf('ListingBasic', $ListingBasic);
    // }
    
    /** @test */
    // public function getStatusIsBasic()
    // {
    //     $expectedResults = 'basic';

    //     $ListingBasic = new ListingBasic();
        
    //     $results = $ListingBasic->getStatus();

    //     $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
    // }

        /** @test */
        // public function getMethodReturnId()
        // {
        //     $expectedResults = 'id';
    
        //     $ListingBasic = new ListingBasic();
            
        //     $results = $ListingBasic->getId();
    
        //     $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
        // }

        /** @test */
        // public function getMethodReturnTitle()
        // {
        //     $expectedResults = 'Title';
    
        //     $ListingBasic = new ListingBasic();
            
        //     $results = $ListingBasic->getTitle();
    
        //     $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
        // }

        /** @test */
        // public function getMethodReturnWebsite()
        // {
        //     $expectedResults = 'website';
    
        //     $ListingBasic = new ListingBasic();
            
        //     $results = $ListingBasic->getWebsite();
    
        //     $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
        // }
 
         /** @test */
        //  public function getMethodReturnEmail()
        //  {
        //      $expectedResults = 'basic';
     
        //      $ListingBasic = new ListingBasic();
             
        //      $results = $ListingBasic->getEmail();
     
        //      $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
        //  } 
         
        /** @test */
        // public function getMethodReturnTwitter()
        // {
        //     $expectedResults = 'basic';
    
        //     $ListingBasic = new ListingBasic();
            
        //     $results = $ListingBasic->getTwitter();
    
        //     $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
        // }   
        
         /** @test */
        //  public function getToArrayMethodReturnArray()
        //  {
     
        //      $ListingBasic = new ListingBasic();
             
        //      $results = $ListingBasic->toArray();
     
        //      $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
        //  }          
    
}