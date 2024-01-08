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


        $data = [
            1 => [
                'user_id' => $testUser->id,
                'account_id' => $account->id,
                'rol_user' => 1,
            ]
        ];

        $account->users()->sync($data);

        // La cuenta se creo
        $this->assertDatabaseHas('accounts', [
            'document_number' => $account->document_number,
            'name' => $account->name
        ]);
    }

    /** @test */
    public function an_account_can_have_more_than_one_user()
    {
        // Creamos a un usuario para relacionar con
        // la cuenta
        $MainUser = new User();
        $testUser = $MainUser->factory()->createOne();

        $secundUser = new User();
        $test2User = $secundUser->factory()->createOne();

        // Crear Cuenta
        // La cuenta tiene relacion muchos a muchos
        $te = new Account();
        $account = $te->factory()->createOne();

        // Formulamos el array de usuarios
        $data = [
            1 => [
                'user_id' => $testUser->id,
                'account_id' => $account->id,
                'rol_user' => 1,
            ],
            2 => [
                'user_id' => $test2User->id,
                'account_id' => $account->id,
                'rol_user' => 2,
            ]
        ];

        $account->users()->sync($data);

        $this->assertDatabaseHas('account_user', [
            'account_id' => $account->id,
            'user_id' => $test2User->id,
            'rol_user' => 2,
        ]);
    }

    // Testeando tipo de cuenta
}
