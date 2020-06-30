<?php
class Book { //class blue print
public $isbn;
public $title;
public $author;
public $available;
//method
 public function getPrintableTitle(): string {
      $result = '<i>' . $this->title
          . '</i> - ' . $this->author;
      if (!$this->available) {
            $result .= ' <b>Not available</b>';
      }
    return $result;
    }
    public function getCopy(): bool {
if ($this->available < 1) {
return false;
} else {
$this->available--;
return true;
}
}
}
$book = new Book();
$book->title = "1984";//SplObjectStorage
$book->author = "George Orwell";
$book->available = true;
var_dump($book);


$book1 = new Book();
$book1->title = "1984";
$book2 = new Book();
$book2->title = "To Kill a Mockingbird";
var_dump($book1, $book2);

$book = new Book();
$book->title = "1984";
$book->author = "George Orwell";
$book->isbn = 9785267006323;
$book->available = 12;
if ($book->getCopy()) {
echo 'Here, your copy.';
} else {
echo 'I am afraid that book is not available.';
}
//constructors are functions invoked when one creates a new instance of the class
public function __construct(
int $isbn,
string $title,
string $author,
int $available = 0
) {
$this->isbn = $isbn;
$this->title = $title;
$this->author = $author;
$this->available = $available;
}
$book = new Book("1984", "George Orwell", 9785267006323, 12);
$book2 = new Book("1984", "George Orwell", 9785267006323);
var_dump($book, $book2);
//magic methods-special group og=f methods that have a different behavior than the norman ocinewdescriptor
//magic methods are triggered by the interaction of class or SplObjectStorage
//magic methods eg__constract(),__toString(cast an object to string),__call(un=sed to invoke a methodon a class that does not exist andgets the name of the methos=d and the list of parameters used in the),__get(it gets the name of propertiesthe user was trying to access)
/*private: This type allows access only to members of the same class. If A and
B are instances of the class C, A can access the properties and methods of B.
• protected: This type allows access to members of the same class and
instances from classes that inherit from that one only. You will see
inheritance in the next section.
• public: This type refers to a property or method that is accessible from
anywhere. Any classes or code in general from outside the class can access it.*?

*/
