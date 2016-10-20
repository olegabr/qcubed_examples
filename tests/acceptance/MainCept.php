<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that frontpage works');
$I->amOnPage('/');
$I->see('QCubed Examples Site');
$I->dontSee('error');
$I->dontSee('fail');
$I->dontSee('warn');
