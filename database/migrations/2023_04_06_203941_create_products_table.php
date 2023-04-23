<?php

use App\Models\Meuble;
use App\Models\Literie;
use App\Models\Accessoire;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {


            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('tag');
            $table->tinyInteger('valide')->default(0);
            $table->string('image_principal')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('reference_product');
            $table->unsignedBigInteger('fournisseur_id');
            $table->unsignedBigInteger('categorie_id');
            $table->timestamps();
            $table->foreign('fournisseur_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }
 // $table->unsignedBigInteger('categorie_id');
            //$table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
