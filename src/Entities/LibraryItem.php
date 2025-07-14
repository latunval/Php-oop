<?php
namespace LibrarySystem\Entities;

abstract class LibraryItem {
    protected string $title;
    protected string $author;

    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }

    abstract public function getDetails(): string;
}
?>