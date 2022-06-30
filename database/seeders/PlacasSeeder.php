<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\xxcust_fc_cp_placas;

class PlacasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $placas = array(
            [

                'clave_vehiculo'             => '47485',
                'placa'                      => 'YC0771A'
                
            ],
            [
                
                'clave_vehiculo'             => '40123',
                'placa'                      => 'YA1824A'
                
            ],
            [
                
                'clave_vehiculo'             => '40121',
                'placa'                      => 'YC0770A'
                
            ],
            [
                
                'clave_vehiculo'             => '40120',
                'placa'                      => 'XX05627'
                
            ],
            [
                
                'clave_vehiculo'             => '35960',
                'placa'                      => 'YA1408A'
                
            ],
            [
                
                'clave_vehiculo'             => '47604',
                'placa'                      => 'XZ9552A'
                
            ],
            [
                
                'clave_vehiculo'             => '47584',
                'placa'                      => 'YC0702A'
                
            ],
            [
                
                'clave_vehiculo'             => '47484',
                'placa'                      => 'YA1407A'
                
            ],
            [
                
                'clave_vehiculo'             => '40122',
                'placa'                      => 'YA1823A'
                
            ],
            [
                
                'clave_vehiculo'             => '31389',
                'placa'                      => 'YA1906A'
                
            ],
            [
                
                'clave_vehiculo'             => '37740',
                'placa'                      => 'YC0707A'
                
            ],
            [
                
                'clave_vehiculo'             => '37726',
                'placa'                      => 'YC0703A'
                
            ],
            [
                
                'clave_vehiculo'             => '33027',
                'placa'                      => 'YC0705A'
                
            ],
            [
                
                'clave_vehiculo'             => '29131',
                'placa'                      => 'YA1917A'
                
            ],
            [
                
                'clave_vehiculo'             => '41300',
                'placa'                      => 'YC0769A'
                
            ],
            [
                
                'clave_vehiculo'             => '47564',
                'placa'                      => 'YC0726A'
                
            ],
            [
                
                'clave_vehiculo'             => '47524',
                'placa'                      => 'YA1405A'
                
            ],
            [
                
                'clave_vehiculo'             => '21294',
                'placa'                      => 'XT61218'
                
            ],
            [
                
                'clave_vehiculo'             => 'CI-80646',
                'placa'                      => 'YA1406A'
                
            ],
            [
                
                'clave_vehiculo'             => 'CI-79210',
                'placa'                      => 'SM01214'
                
            ],
            [
                
                'clave_vehiculo'             => '22205',
                'placa'                      => 'YA1551A'
                
            ],
            [
                
                'clave_vehiculo'             => '47544',
                'placa'                      => 'YA1237A'
                
            ],
            [
                
                'clave_vehiculo'             => '40125',
                'placa'                      => 'YA1765A'
                
            ],
            [
                
                'clave_vehiculo'             => 'CI-79451',
                'placa'                      => 'XZ9553A'
                
            ],
            [
                
                'clave_vehiculo'             => '27789',
                'placa'                      => 'YC0706A'
                
            ],
            [
                
                'clave_vehiculo'             => '40126',
                'placa'                      => 'YC0701A'
                
            ],
            [
                
                'clave_vehiculo'             => 'CI-79454',
                'placa'                      => 'YC0714A'
                
            ],
            [
                
                'clave_vehiculo'             => '40127',
                'placa'                      => 'YC0725A'
                
            ],
            [
                
                'clave_vehiculo'             => '43860',
                'placa'                      => 'YC0724A'
                
            ],
            [
                
                'clave_vehiculo'             => '40124',
                'placa'                      => 'SM65565'
                
            ],
        );

        xxcust_fc_cp_placas::insert($placas);
    }
}
