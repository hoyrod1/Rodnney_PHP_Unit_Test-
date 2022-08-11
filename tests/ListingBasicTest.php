<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    // /** @test */
    // public function exceptionReturnAsExpected(): void
    // {
    //     $exceptionTest = new LightBasic();

    //     $this->expectException(InvalidArgumentException::class);
    // }

    // /** @test */
    // public function objectCreatedWithValidAurguments()
    // {
    //     $data = ["1", "First Test"];
    //     $ListingBasic = new ListingBasic();
        
    //     $this->assertInstanceOf('LightBasic', $ListingBasic);
    // }
    
    /** @test */
    public function getStatusIsBasic()
    {
        $expectedResults = 'basic';

        $ListingBasic = new ListingBasic();
        
        $results = $ListingBasic->getStatus();

        $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
    }

        /** @test */
        public function getMethodReturnId()
        {
            $expectedResults = 'id';
    
            $ListingBasic = new ListingBasic();
            
            $results = $ListingBasic->getId();
    
            $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
        }

        /** @test */
        public function getMethodReturnTitle()
        {
            $expectedResults = 'Title';
    
            $ListingBasic = new ListingBasic();
            
            $results = $ListingBasic->getTitle();
    
            $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
        }

        /** @test */
        public function getMethodReturnWebsite()
        {
            $expectedResults = 'website';
    
            $ListingBasic = new ListingBasic();
            
            $results = $ListingBasic->getWebsite();
    
            $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
        }
 
         /** @test */
         public function getMethodReturnEmail()
         {
             $expectedResults = 'basic';
     
             $ListingBasic = new ListingBasic();
             
             $results = $ListingBasic->getEmail();
     
             $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
         } 
         
        /** @test */
        public function getMethodReturnTwitter()
        {
            $expectedResults = 'basic';
    
            $ListingBasic = new ListingBasic();
            
            $results = $ListingBasic->getTwitter();
    
            $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
        }   
        
         /** @test */
         public function getToArrayMethodReturnArray()
         {
     
             $ListingBasic = new ListingBasic();
             
             $results = $ListingBasic->toArray();
     
             $this->assertEquals($expectedResults, $results, "The getStatus method does not return basic");
         }          
    
}