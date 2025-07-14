<?php
namespace LibrarySystem\Entities;

use LibrarySystem\Actions\Borrowable;

class Book extends LibraryItem implements Borrowable {
    private string $isbn;
    private int $availableCopies;

    public function __construct(string $title, string $author, string $isbn, int $availableCopies) {
        parent::__construct($title, $author);
        $this->isbn = $isbn;
        $this->availableCopies = $availableCopies;
    }

    public function getDetails(): string {
        return "Book: {$this->title} by {$this->author}, ISBN: {$this->isbn}, Copies: {$this->availableCopies}";
    }

    public function borrowItem(): bool {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    public function returnItem(): void {
        $this->availableCopies++;
    }

    public function getIsbn(): string {
        return $this->isbn;
    }
}
?>