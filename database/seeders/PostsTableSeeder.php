<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assume we have website IDs from the `websites` table (e.g., 1 and 2).
        $posts = [
            [
                'website_id' => 1,
                'title' => 'FKP USK perkenalkan Bubu ramah lingkungan ke nelayan Lhok Paroy Aceh Besar',
                'description' => 'Akademisi Fakultas Kelautan dan Perikanan Universitas Syiah Kuala (FKP USK) memperkenalkan penggunaan bubu berbahan galvanis, yakni alat tangkap ikan laut yang dinilai lebih ramah lingkungan untuk mendukung ekonomi nelayan dan industri perikanan berkelanjutan. Bubu ini adalah modifikasi dari bubu sibolga yang banyak digunakan nelayan di Aceh bagian barat-selatan. Bubu ini kita modifikasi menggunakan bahan baku galvanis, yakni kawat yang mengandung baja dan diklaim anti-karat dan korosi,” kata Ketua Tim Pengabdi dari FKP USK Adrian Damora di lokasi pelatihan kepada nelayan Gampong (Desa) Lhok Paroy, Kabupaten Aceh Besar, Minggu. Inovasi itu merupakan program Pengabdian Kepada Masyarakat Berbasis Produk (PKMBP) 2023 yang hasilnya diterapkan oleh nelayan di Kabupaten Aceh Besar, Provinsi Aceh.',
            ],
            [
                'website_id' => 2,
                'title' => 'Mahasiswa USK Laksanakan KKN Tematik, Mendukung Ekonomi Rumah Tangga Dan Ketahanan Pangan Masyarakat',
                'description' => 'Sebanyak 12 orang mahasiswa Universitas Syiah Kuala melakukan kegiatan Kuliah Kerja Nyata (KKN) Tematik di Desa Seni Antara Kecamatan Permata Kabupaten Bener Meriah, Kamis (20/7/2023)',
            ],
            // Add more posts as needed.
        ];

        foreach ($posts as $postData) {
            Post::create($postData);
        }
    }
}
