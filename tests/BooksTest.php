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

    public function testNavegarPorTodosOsLivros(): void
    {
        $book1 = new Book('O Mundo de Sofia', 'Jostein Gaarder');
        $book2 = new Book('O Silmarillion', 'J. R. R. Tolkien');

        $library = new Library();
        $library->add($book1);
        $library->add($book2);

        self::assertEquals($book1, $library->nextBook());
        self::assertEquals($book2, $library->nextBook());
    }
}