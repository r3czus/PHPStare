<?php
class User {
	// Wlasciwosci
	public $id;
	public $name;
	public $email;
	public $password; 
}

$janusz = new User();
$janusz->id = 1;
$janusz->name = 'Janusz';
$janusz->email = 'janusz@strefakursow.pl';
$janusz->password = 'sadE532Sed';
echo $janusz->id . '<br/>';
echo $janusz->name . '<br/>';
echo $janusz->email . '<br/>';
echo $janusz->password . '<br/>';
