<?php
$I = new FunctionalTester($scenario);
$I->am('a Dyt member');
$I->wantTo('login to my Dyt account');

$I->signIn();

$I->seeInCurrentUrl('/statuses');
$I->see('Welcome back!');
$I->assertTrue(Auth::check());