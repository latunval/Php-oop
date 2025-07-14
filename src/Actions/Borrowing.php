<?php
namespace LibrarySystem\Actions;

use LibrarySystem\Entities\Member;
use LibrarySystem\Entities\LibraryItem;
use DateTime;

class Borrowing {
    private Member $member;
    private LibraryItem $item;
    private DateTime $borrowDate;
    private DateTime $dueDate;

    public function __construct(Member $member, LibraryItem $item) {
        $this->member = $member;
        $this->item = $item;
        $this->borrowDate = new DateTime();
        $this->dueDate = (new DateTime())->modify('+14 days');
    }

    public function getDetails(): string {
        return "{$this->member->getName()} borrowed: " . $this->item->getDetails() . " | Due: " . $this->dueDate->format('Y-m-d');
    }
}
?>