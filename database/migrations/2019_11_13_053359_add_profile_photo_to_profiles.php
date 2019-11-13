<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfilePhotoToProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('profilephoto_file_name')->nullable();
            $table->integer('profilephoto_file_size')->nullable();
            $table->string('profilephoto_content_type')->nullable();
            $table->timestamp('profilephoto_updated_at')->nullable();
            $table->string('profilephoto_variants', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn([
                'profilephoto_file_name',
                'profilephoto_file_size',
                'profilephoto_content_type',
                'profilephoto_updated_at',
                'profilephoto_variants'
            ]);
        });
    }
}
