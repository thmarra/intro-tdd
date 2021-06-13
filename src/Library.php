<?php

namespace App;

class Library implements \Countable
{
    private array $books = [];
    private int $nextBookIdx = 0;

    public function add(Book $book): void
    {
        $this->books[] = $book;
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function nextBook(): ?Book
    {
        if(isset($this->books[$this->nextBookIdx])) {
            $book = $this->books[$this->nextBookIdx];
            $this->nextBookIdx++;

            return $book;
        }

        return null;
    }
}