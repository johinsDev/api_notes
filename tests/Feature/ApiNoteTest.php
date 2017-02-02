<?php

namespace Tests\Feature;

use App\Category;
use App\Note;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiNoteTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $category = factory(Category::class)->create();

        $notes = factory(Note::class)->times(2)->create([
            'category_id' => $category->id
        ]);

        $this->get('v1/notes')
            ->assertStatus(200)
            ->assertJson($notes->toArray());
    }
}
