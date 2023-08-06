<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WebsitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $websites = [
            [
                'name' => 'LPPM USK',
                'url' => 'https://lppm.usk.ac.id',
            ],
            [
                'name' => 'KKN USK',
                'url' => 'https://kkn.usk.ac.id',
            ],
        ];

        foreach ($websites as $websiteData) {
            Website::create($websiteData);
        }
    }
}
