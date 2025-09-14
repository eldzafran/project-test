<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus folder logo lama jika ada
        if (File::exists(public_path('storage/logos'))) {
            File::deleteDirectory(public_path('storage/logos'));
        }
        
        // Buat folder baru
        File::makeDirectory(public_path('storage/logos'), 0777, true);

        // Buat 10 perusahaan dummy
        Company::factory()->count(10)->create();
    }
}