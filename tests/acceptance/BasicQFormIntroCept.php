<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that control button works');

$I->amOnPage('/basic_qform/intro.php');
$I->see('Hello World Example');
$I->see('Click the button to change my message');
$I->click('#c2');
$I->see('Hello, world');
