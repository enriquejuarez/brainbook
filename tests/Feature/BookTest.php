<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndexBook()
    {
      $this->get('books/index')
      	->assertStatus(200)
      	->assertSee('Index View');
    }

	public function testStoreBook()
   {
   	$this->get('books/store')
      	->assertStatus(200)
      	->assertSee('Book saved');
   }

	public function testCreateBook()
	{
		$this->get('books/create')
			->assertStatus(200)
			->assertSee('Create View');
	}
}
