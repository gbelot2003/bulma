<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use App\Models\Account;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AccountsTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    /** @test */
    public function an_account_can_be_created(): void
    {
        // Creamos a un usuario para relacionar con
        // la cuenta
        $MainUser = new User();
        $testUser = $MainUser->factory()->createOne();



        // Crear Cuenta
        // La cuenta tiene relacion muchos a muchos
        $te = new Account();

        $account = $te->factory()->createOne();
        $account->users()->sync($testUser);

        $this->assertDatabaseHas('accounts', [
            'document_number' => $account->document_number,
            'name' => $account->name
        ]);
    }
}
