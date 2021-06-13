<?php

namespace Tests;

use App\Book;
use App\Library;
use PHPUnit\Framework\TestCase;

class BooksTest extends TestCase
{
    public function testBibliotecaPossuiLivros(): void
    {
        $book = new Book('Aqueles olhos verdes', 'Pedro Bandeira');

        $library = new Library();

        self::assertEmpty($library->nextBook());

        $library->add($book);

        self::assertEquals($book, $library->nextBook());
        self::assertCount(1, $library);
    }
}