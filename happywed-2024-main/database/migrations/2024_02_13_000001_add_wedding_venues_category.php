<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Admin\CategoryMaster;

class AddWeddingVenuesCategory20240213 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add Wedding Venues category
        CategoryMaster::create([
            'name' => 'Wedding Venues',
            'description' => 'Wedding Venue Categories',
            'type' => 'service',
            'status' => 1,
            'priority' => 1,
            'published_at' => now(),
            'icon' => '<i class="material-icons">location_city</i>',
            'imageOne' => 'venue.png',
            'slug' => 'wedding-venues',
            'path' => 'venues',
            'relation' => null,
            'parent_id' => null,
            'admin_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        CategoryMaster::where('name', 'Wedding Venues')->delete();
    }
} 