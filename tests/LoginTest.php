<?php

use \loginIndex;
use \PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
   public function successfulLogin()
   {
    $web_assert = $this->assertSession();
    $page = $this->getSession()->getPage();

    $button = $page->findButton('submit');

    $this->assertNotEmpty($button);

    $this->getSession()->getPage()->find('css', $button)->click();

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Something posted
    
        if (isset($_POST['submit'])) {
            // btnDelete
        } else {
            // Assume btnSubmit
        }
  }
  
   }
}