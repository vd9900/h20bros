<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\GalleryModel;

class GalleryIndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = GalleryModel::orderBy('id', 'desc')->get();

        foreach ($gallery as $index => $image) {
            $image->update(["gallery_index" => $index]);
        }
    }
}
