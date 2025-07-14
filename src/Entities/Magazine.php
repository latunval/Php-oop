<?php
namespace LibrarySystem\Entities;

use LibrarySystem\Actions\Borrowable;

class Magazine extends LibraryItem implements Borrowable {
    private int $issueNumber;
    private int $availableCopies;

    public function __construct(string $title, string $author, int $issueNumber, int $availableCopies) {
        parent::__construct($title, $author);
        $this->issueNumber = $issueNumber;
        $this->availableCopies = $availableCopies;
    }

    public function getDetails(): string {
        return "Magazine: {$this->title} Issue #{$this->issueNumber}, Author: {$this->author}, Copies: {$this->availableCopies}";
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
}
?>