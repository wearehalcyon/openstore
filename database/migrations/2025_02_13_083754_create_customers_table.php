<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id')->default(1);
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('patronymic')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->longText('cart')->nullable();
            $table->longText('wishlist')->nullable();
            $table->string('ip')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
