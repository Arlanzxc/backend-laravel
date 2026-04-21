<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Author;

class AuthorTest extends TestCase
{
    public function test_full_name_returns_concatenated_name_and_surname(): void
    {
        $author = new Author([
            'name' => 'Stephen',
            'surname' => 'King'
        ]);

        $this->assertEquals('Stephen King', $author->fullName());
    }
}
