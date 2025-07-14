<?php
namespace LibrarySystem;

use LibrarySystem\Entities\LibraryItem;
use LibrarySystem\Entities\Member;

class Library implements \Iterator {
    private array $items = [];
    private array $members = [];
    private static int $itemCount = 0;
    private int $position = 0;

    public function addItem(LibraryItem $item): void {
        $this->items[] = $item;
        self::$itemCount++;
    }

    public function registerMember(Member $member): void {
        $this->members[] = $member;
    }

    public static function getItemCount(): int {
        return self::$itemCount;
    }

    public function current(): mixed {
        return $this->items[$this->position];
    }

    public function key(): int {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function valid(): bool {
        return isset($this->items[$this->position]);
    }

    public function getItems(): array {
        return $this->items;
    }
}
?>