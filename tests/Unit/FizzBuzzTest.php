<?php

namespace Tests\Unit;

use Tests\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function validate_multiples_of_ten_numbers()
    {
        $response = $this->get('/api/fizzbuzz/1/10');
        $response->assertSee("1\n2\nFizz\n4\nBuzz\nFizz\n7\n8\nFizz\nBuzz");
    }
}
