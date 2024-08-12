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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500);
            $table->longText('content');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('featured_img')->nullable();
            $table->string('attachment')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->date('posted_at')->nullable();
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
			$table->timestamp('updated_at')->nullable(); 
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
