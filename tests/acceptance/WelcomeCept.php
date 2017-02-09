<?php
    $I = new AcceptanceTester($scenario);
    $I->wantTo('See message');
    $I->amOnPage('/');
    $I->see('My first micro example');
?>