<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Book;

class BookTest extends TestCase
{
    public function test_it_correctly_stores_and_retrieves_short_titles(): void
    {
        $book = new Book();
        $book->short_title = 'LOTR';

        $this->assertEquals('LOTR', $book->short_title);
    }
}