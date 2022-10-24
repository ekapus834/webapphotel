<?php

namespace Database\Seeders;

use App\Models\FasilitasHotel;
use Illuminate\Database\Seeder;

class FasilitasHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Kolam Renang',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'Curabitur bibendum fringilla massa. Vivamus tellus lorem, hendrerit nec ornare ut, fringilla ac erat. Quisque efficitur semper turpis, eget tempor quam molestie at. Nulla facilisi. Nam commodo mattis ipsum sed porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla porta quis est nec rutrum. In vulputate ornare convallis.',
        ]);

        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Restoran',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'Curabitur bibendum fringilla massa. Vivamus tellus lorem, hendrerit nec ornare ut, fringilla ac erat. Quisque efficitur semper turpis, eget tempor quam molestie at. Nulla facilisi. Nam commodo mattis ipsum sed porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla porta quis est nec rutrum. In vulputate ornare convallis.',
        ]);

        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Parkir Luas',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'Curabitur bibendum fringilla massa. Vivamus tellus lorem, hendrerit nec ornare ut, fringilla ac erat. Quisque efficitur semper turpis, eget tempor quam molestie at. Nulla facilisi. Nam commodo mattis ipsum sed porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla porta quis est nec rutrum. In vulputate ornare convallis.',
        ]);

        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Sarapan Pagi Gratis',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'Curabitur bibendum fringilla massa. Vivamus tellus lorem, hendrerit nec ornare ut, fringilla ac erat. Quisque efficitur semper turpis, eget tempor quam molestie at. Nulla facilisi. Nam commodo mattis ipsum sed porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla porta quis est nec rutrum. In vulputate ornare convallis.',
        ]);
    }
}
