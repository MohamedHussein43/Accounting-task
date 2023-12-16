<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounting_panals', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('service_name');
            $table->decimal('initial_price', 10, 2);
            $table->tinyInteger('tax_type')->default(0)->comment('0 means fixed price, and 1 means percentage');;
            $table->decimal('tax', 10, 2)->nullable();
            $table->tinyInteger('admin_tax_type')->default(0)->comment('0 means fixed price, and 1 means percentage');;
            $table->decimal('admin_tax', 10, 2)->nullable();
            $table->decimal('total_owner_revenue', 10, 2)->nullable();
            $table->decimal('total_admin_revenue', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounting_panals');
    }
};
