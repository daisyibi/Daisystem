<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\UserProfiles;
use App\Models\Networking;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('networkings');
        Schema::create('networkings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user_profiles')->onDelete('restrict')->onUpdate('cascade');
            $table->string('desired_company');
            $table->decimal('salary_expectation');
            $table->integer('work_experience');
            $table->text('skills');
            $table->text('degree');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('networkings');
    }
};
