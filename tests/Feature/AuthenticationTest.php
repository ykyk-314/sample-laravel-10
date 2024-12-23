<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = User::factory()->create();
        if ($user instanceof \Illuminate\Database\Eloquent\Collection) {
            $user = $user->first();
        }
        $response = $this
            ->actingAs($user)
            ->get(route('home'));

        $response
            ->assertStatus(200)
            ->assertViewIs('welcome')
            ->assertSee('Logout');
    }
}
