<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Verifica y crea los roles solo si no existen
        $role1 = Role::firstOrCreate(['name' => 'administrador']);
        $role2 = Role::firstOrCreate(['name' => 'escritor']);

        // Busca al usuario con id 1 y asigna el rol si el usuario existe
        $user = User::find(1);
        if ($user) {
            $user->assignRole($role1);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Busca y elimina los roles
        $role1 = Role::where('name', 'administrador')->first();
        $role2 = Role::where('name', 'escritor')->first();

        if ($role1) {
            $role1->delete();
        }

        if ($role2) {
            $role2->delete();
        }
    }
};
