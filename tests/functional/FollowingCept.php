<?php 
$I = new FunctionalTester($scenario);

$I->am('a Dyt user');
$I->wantTo('follow other Dyt users');


// setup
$I->haveAnAccount(['username'=>'OtherUser']);
$I->signIn();



// action
$I->click('Browse Users');
$I->click('2');
$I->click('OtherUser');

$I->seeCurrentUrlEquals('/@OtherUser');

//when I follow
$I->click('Follow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');
$I->see('Unfollow OtherUser');
//when I unfollow
$I->click('Unfollow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');
$I->see('Follow OtherUser');
