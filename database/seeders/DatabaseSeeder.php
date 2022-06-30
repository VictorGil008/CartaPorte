<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DomicilioSucursalesSeeder::class);
        $this->call(AutotransporteSeeder::class);
        $this->call(PlacasSeeder::class);
        $this->call(PolizasCargaSeeder::class);
        $this->call(PolizasCivilSeeder::class);
        $this->call(OperadorSeeder::class);
        $this->call(LicenciaSeeder::class);

    }
}
