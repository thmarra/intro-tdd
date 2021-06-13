<?php

namespace App;

class Library implements \Countable
{
    private array $books = [];

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
        return $this->books[0] ?? null;
    }
}