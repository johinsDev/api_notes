<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        factory(User::class)->create(['name' => 'Johan']);
        $this->get('name')
            ->assertStatus(200)
            ->assertSee('Johan');
    }
}
