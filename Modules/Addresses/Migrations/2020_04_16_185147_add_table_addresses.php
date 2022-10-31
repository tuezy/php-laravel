<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class AddTableAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {
            // transaction is important to prevent loosing data on failure
            DB::beginTransaction();

            Schema::create('addresses', function (Blueprint $table) {
                $table->increments('id');
                $table->string('address_type');
                $table->unsignedInteger('customer_id')->nullable()->comment('null if guest checkout');
                $table->unsignedInteger('cart_id')->nullable()->comment('only for cart_addresses');
                $table->unsignedInteger('order_id')->nullable()->comment('only for order_addresses');

                $table->string('first_name');
                $table->string('last_name');
                $table->string('gender')->nullable();
                $table->string('company_name')->nullable();
                $table->string('address1');
                $table->string('address2')->nullable();
                $table->string('postcode');
                $table->string('city');
                $table->string('state');
                $table->string('country');
                $table->string('email')->nullable();
                $table->string('phone')->nullable();

                $table->boolean('default_address')
                    ->default(false)
                    ->comment('only for customer_addresses');

                $table->json('additional')->nullable();

                $table->timestamps();

                $table->foreign(['customer_id'])->references('id')->on('customers')->onDelete('cascade');
                $table->foreign(['cart_id'])->references('id')->on('cart')->onDelete('cascade');
                $table->foreign(['order_id'])->references('id')->on('orders')->onDelete('cascade');
            });

            Schema::disableForeignKeyConstraints();

            Schema::enableForeignKeyConstraints();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        throw new Exception('you cannot revert this migration: data would be lost');
    }

}
