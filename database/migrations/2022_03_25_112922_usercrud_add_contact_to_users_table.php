<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsercrudAddContactToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('usercrud.table_names');
        $columnNames = config('usercrud.column_names');

        if(empty($tableNames)){
            throw new \Exception('Error: config/usercrud.php not loaded. Run [php artisan config:clear] and try again.');
        }
        if (empty($columnNames['contact_number'] ?? null)) {
            throw new \Exception('Error: contact_number on config/usercrud.php not loaded. Run [php artisan config:clear] and try again.');
        }

        if (Schema::hasTable($tableNames['users'])) {
            Schema::table($tableNames['users'], function (Blueprint $table) use ($tableNames, $columnNames) {
                if (! Schema::hasColumn($tableNames['users'], $columnNames['contact_number'])) {
                    $table->string($columnNames['contact_number'], 20)->nullable()->after('password');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('usercrud.table_names');
        $columnNames = config('usercrud.column_names');

        if(empty($tableNames)){
            throw new \Exception('Error: config/usercrud.php not loaded. Run [php artisan config:clear] and try again.');
        }
        if (empty($columnNames['contact_number'] ?? null)) {
            throw new \Exception('Error: contact_number on config/usercrud.php not loaded. Run [php artisan config:clear] and try again.');
        }

        if (Schema::hasTable($tableNames['users'])) {
            Schema::table($tableNames['users'], function (Blueprint $table) use ($tableNames, $columnNames) {
                if (Schema::hasColumn($tableNames['users'], $columnNames['contact_number'])) {
                    $table->dropColumn($columnNames['contact_number']);
                }
            });
        }
    }
}
