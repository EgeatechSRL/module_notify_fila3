<?php
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// https://blog.quickadminpanel.com/laravel-notifications-with-database-driver-internal-messages/
=======
>>>>>>> 602db11 (up)
=======
//https://blog.quickadminpanel.com/laravel-notifications-with-database-driver-internal-messages/
>>>>>>> 0cbdb01 (up)
=======
//https://blog.quickadminpanel.com/laravel-notifications-with-database-driver-internal-messages/
>>>>>>> fe06862 (.)
declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
<<<<<<< HEAD
class CreateNotificationsTable extends XotBaseMigration
{
=======
use Illuminate\Support\Facades\Schema;
=======
declare(strict_types=1);

>>>>>>> bc60653 (up)
use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateNotificationsTable extends XotBaseMigration {
<<<<<<< HEAD

>>>>>>> 40ebae8 (up)
=======
>>>>>>> bc60653 (up)
=======
class CreateNotificationsTable extends XotBaseMigration {
>>>>>>> 602db11 (up)
=======
class CreateNotificationsTable extends XotBaseMigration {
>>>>>>> fe06862 (.)
    /**
     * Run the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function up()
    {
        // -- CREATE --
=======
    public function up(){
         // -- CREATE --
>>>>>>> 40ebae8 (up)
=======
    public function up() {
        // -- CREATE --
>>>>>>> bc60653 (up)
=======
    public function up() {
        // -- CREATE --
>>>>>>> 602db11 (up)
=======
    public function up() {
        // -- CREATE --
>>>>>>> fe06862 (.)
        $this->tableCreate(
            function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->string('type');
                $table->morphs('notifiable');
                $table->text('data');
                $table->timestamp('read_at')->nullable();
                $table->timestamps();
            }
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // -- UPDATE --
=======
         // -- UPDATE --
>>>>>>> 40ebae8 (up)
=======
        // -- UPDATE --
>>>>>>> bc60653 (up)
=======
        // -- UPDATE --
>>>>>>> 602db11 (up)
=======
        // -- UPDATE --
>>>>>>> fe06862 (.)
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('updated_at')) {
                    $table->timestamps();
                }
                if (! $this->hasColumn('updated_by')) {
                    $table->string('updated_by')->nullable()->after('updated_at');
                    $table->string('created_by')->nullable()->after('created_at');
                }
            }
        );
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======

    
};
>>>>>>> 40ebae8 (up)
=======
}
>>>>>>> bc60653 (up)
=======
}
>>>>>>> 602db11 (up)
=======
}
>>>>>>> fe06862 (.)
