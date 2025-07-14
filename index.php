<?php
// require 'vendor/autoload.php';


// Manually include all class files
require_once 'src/Actions/Borrowable.php';
require_once 'src/Library.php';
require_once 'src/Entities/LibraryItem.php';
require_once 'src/Entities/Book.php';
require_once 'src/Entities/Magazine.php';
require_once 'src/Entities/Member.php';
require_once 'src/Actions/Borrowing.php';

use LibrarySystem\Library;
use LibrarySystem\Entities\Book;
use LibrarySystem\Entities\Magazine;
use LibrarySystem\Entities\Member;
use LibrarySystem\Actions\Borrowing;

// Now you can use the classes
$library = new Library();


// Add Books
$book1 = new Book("1984", "George Orwell", "123456", 2);
$book2 = new Book("Animal Farm", "George Orwell", "654321", 1);
$book3 = new Book("Clean Code", "Robert C. Martin", "112233", 3);

// Add Magazines
$mag1 = new Magazine("Tech Today", "Editor A", 44, 5);
$mag2 = new Magazine("Science World", "Editor B", 21, 2);
$mag3 = new Magazine("Gadget Monthly", "Editor C", 33, 4);

// Add to Library
$library->addItem($book1);
$library->addItem($book2);
$library->addItem($book3);
$library->addItem($mag1);
$library->addItem($mag2);
$library->addItem($mag3);

// Register Members
$member1 = new Member("M001", "Alice", "alice@email.com");
$member2 = new Member("M002", "Bob", "bob@email.com");
$member3 = new Member("M003", "Charlie", "charlie@email.com");

$library->registerMember($member1);
$library->registerMember($member2);
$library->registerMember($member3);

// Borrowing
if ($book1->borrowItem()) {
    $borrowing = new Borrowing($member1, $book1);
    echo $borrowing->getDetails() . "\n";
}

// Display all items
foreach ($library as $item) {
    echo $item->getDetails() . "\n";
}

echo "Total Library Items: " . Library::getItemCount();
?>