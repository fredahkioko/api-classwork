<?php
class Customer {
private $id;
private $firstname;
private $surname;
private $email;
public function __construct(
int $id,
string $firstname,
string $surname,
string $email
) {
$this->id = $id;
$this->firstname = $firstname;
$this->surname = $surname;
$this->email = $email;
}
}
/*
Conventions for classes
When working with classes, you should know that there are some
conventions that everyone tries to follow in order to ensure clean code
which is easy to maintain. The most important ones are as follows:
• Each class should be in a file named the same as the class along
with the .php extension
• Class names should be in CamelCase, that is, each word should
start with an uppercase letter, followed by the rest of the word in
lowercase
• A file should contain only the code of one class
• Inside a class, you should first place the properties, then the
constructor, and finally, the rest of the methods*/
