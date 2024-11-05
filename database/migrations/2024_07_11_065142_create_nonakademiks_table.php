<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User; // Pastikan Anda mengimpor model User

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nonakademiks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('nohp')->nullable();
            $table->enum('semester', ['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4', 'Semester 5', 'Semester 6'])->nullable();
            $table->string('ipk')->nullable();
            $table->string('status')->nullable();
            $table->text('dok')->nullable();
            $table->date('tgl')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nonakademiks');
    }
};
