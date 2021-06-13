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
        $book = current($this->books);

        if($book) {
            next($this->books);
            return $book;
        }

        return null;
    }
}