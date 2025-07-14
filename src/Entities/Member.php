<?php
namespace LibrarySystem\Entities;

class Member {
    private string $memberId;
    private string $name;
    private string $email;
    private array $borrowedBooks = [];

    public function __construct(string $memberId, string $name, string $email) {
        $this->memberId = $memberId;
        $this->name = $name;
        $this->email = $email;
    }

    public function borrowBook($book): void {
        $this->borrowedBooks[] = $book;
    }

    public function getBorrowedBooks(): array {
        return $this->borrowedBooks;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getId(): string {
        return $this->memberId;
    }
}
?>