<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        function leadtableStructure(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        } 

        Schema::create('lead_types', function(Blueprint $table) {
            return leadtableStructure($table);
        } );

           DB::table('lead_types')->insert([
            'name' => 'Default Lead Type',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lead_types');
    }
}
