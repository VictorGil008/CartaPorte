<?php

namespace Database\Seeders;

use App\Models\xxcust_fc_cp_licencias;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LicenciaSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $licencia = array(
            [

                'numero_operador'      => '11061',
                'numero_licencia'      => 'UB0924H57P',
                'vigencia_licencia'    => Carbon::parse('16-07-2022')
                
            ],
            [

                'numero_operador'        => '11653',
                'numero_licencia'        => 'UB012RGXA',
                'vigencia_licencia'      => Carbon::parse('12-04-2023')
                
            ],
            [

                'numero_operador'         => '10182',
                'numero_licencia'         => 'A315365',
                'vigencia_licencia'       => Carbon::parse('30-11-2022')
                
            ],
            [

                'numero_operador'          => '11673',
                'numero_licencia'          => 'UB09308QK',
                'vigencia_licencia'        => Carbon::parse('12-01-2025')
                
            ],
            [

                'numero_operador'          => '11335',
                'numero_licencia'          => '1CH1776546',
                'vigencia_licencia'        => Carbon::parse('15-02-2023')
                
            ],
            [

                'numero_operador'          => '11380',
                'numero_licencia'          => '1CH1740633',
                'vigencia_licencia'        => Carbon::parse('01-12-2022')
                
            ],
            [

                'numero_operador'          => '9477',
                'numero_licencia'          => 'UC012XFX1',
                'vigencia_licencia'        => Carbon::parse('04-09-2024')
                
            ],
            [

                'numero_operador'          => '4583',
                'numero_licencia'          => 'UBO12Q1YY',
                'vigencia_licencia'        => Carbon::parse('28-09-2023')
                
            ],
            [

                'numero_operador'          => '11665',
                'numero_licencia'          => 'UBO12HDHT',
                'vigencia_licencia'        => Carbon::parse('28-06-2022')
                
            ],
            [

                'numero_operador'          => '10485',
                'numero_licencia'          => '8091122',
                'vigencia_licencia'        => Carbon::parse('23-09-2024')
                
            ],
            [

                'numero_operador'          => '11088',
                'numero_licencia'          => '8091990',
                'vigencia_licencia'        => Carbon::parse('17-11-2024')
                
            ],
            [

                'numero_operador'          => '5000',
                'numero_licencia'          => 'A513851',
                'vigencia_licencia'        => Carbon::parse('18-06-2023')
                
            ],
            [

                'numero_operador'          => '7791',
                'numero_licencia'          => 'A513517',
                'vigencia_licencia'        => Carbon::parse('05-06-2023')
                
            ],
            [

                'numero_operador'          => '9025',
                'numero_licencia'          => 'A885745',
                'vigencia_licencia'        => Carbon::parse('22-07-2024')
                
            ],
            [

                'numero_operador'          => '8516',
                'numero_licencia'          => 'A429354',
                'vigencia_licencia'        => Carbon::parse('24-02-2023')
                
            ],
            [

                'numero_operador'          => '8170',
                'numero_licencia'          => 'UB002R5JA',
                'vigencia_licencia'        => Carbon::parse('20-11-2023')
                
            ],
            [

                'numero_operador'          => '1251',
                'numero_licencia'          => 'UB0A32E5X',
                'vigencia_licencia'        => Carbon::parse('25-04-2025')
                
            ]
        );

        xxcust_fc_cp_licencias::insert($licencia);
    }
}
