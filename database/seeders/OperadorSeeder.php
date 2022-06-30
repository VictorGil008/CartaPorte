<?php

namespace Database\Seeders;

use App\Models\xxcust_fc_cp_gestion_operador;
use Illuminate\Database\Seeder;

class OperadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operador = array(
            [

                'numero_operador'                   => '11061',
                'nombre_completo_operador'          => 'CANO BOLAÑOS ALBERTO',
                'rfc_operador'    => 'CABA790709JT9'
                
            ],
            [

                'numero_operador'                   => '11653',
                'nombre_completo_operador'          => 'TENORIO ACOSTA MIGUEL ANGEL',
                'rfc_operador'                      => 'TEAM9706288E0'
                
            ],
            [

                'numero_operador'                   => '10182',
                'nombre_completo_operador'          => 'SANCHEZ MITRE JORGE ENRIQUE',
                'rfc_operador'                      => 'SAMJ7808285I2'
                
            ],
            [

                'numero_operador'                   => '11673',
                'nombre_completo_operador'          => 'RODRIGUEZ GONZALEZ FRANCISCO',
                'rfc_operador'                      => 'ROGF9712225N7'
                
            ],
            [

                'numero_operador'                   => '11335',
                'nombre_completo_operador'          => 'OVANDO DE LA CRUZ WILBERT',
                'rfc_operador'                      => 'OACW7905187W3'
                
            ],
            [

                'numero_operador'                   => '11380',
                'nombre_completo_operador'          => 'SOLIS JIMENEZ VICTOR MANUEL',
                'rfc_operador'                      => 'SOJV980816LP8'
                
            ],
            [

                'numero_operador'                   => '9477',
                'nombre_completo_operador'          => 'CASTILLO AMADOR JUAN',
                'rfc_operador'                      => 'CAAJ720926DWA'
                
            ],
            [

                'numero_operador'                   => '4583',
                'nombre_completo_operador'          => 'AGUILAR HUERTA JORGE',
                'rfc_operador'                      => 'AUHJ670423KL7'
                
            ],
            [

                'numero_operador'                   => '11665',
                'nombre_completo_operador'          => 'SANCHEZ GARCIA HUGO',
                'rfc_operador'                      => 'SAGH9007123U6'
                
            ],
            [

                'numero_operador'                   => '10485',
                'nombre_completo_operador'          => 'ALFARO VIDAL LINO',
                'rfc_operador'                      => 'AAVL820924EV3'
                
            ],
            [

                'numero_operador'                   => '11088',
                'nombre_completo_operador'          => 'GARCIA AGUILAR JUAN JOSE',
                'rfc_operador'                      => 'GAAJ7303085V3'
                
            ],
            [

                'numero_operador'                   => '5000',
                'nombre_completo_operador'          => 'FRANCISCO NOZA LUNA',
                'rfc_operador'                      => 'NOLF7803168L1'
                
            ],
            [

                'numero_operador'                   => '7791',
                'nombre_completo_operador'          => 'ANTONIO MENDEZ GONZALEZ',
                'rfc_operador'                      => 'MEGA690911J70'
                
            ],
            [

                'numero_operador'                   => '9025',
                'nombre_completo_operador'          => 'JUAN CARLOS PACHECO MORALES',
                'rfc_operador'                      => 'PAMJ661031LVA'
                
            ],
            [

                'numero_operador'                   => '8516',
                'nombre_completo_operador'          => 'CARLOS MAYA HERNANDEZ',
                'rfc_operador'                      => 'MAHC760426IMA'
                
            ],
            [

                'numero_operador'                   => '8170',
                'nombre_completo_operador'          => 'SANTIAGO RAMIREZ PABLO',
                'rfc_operador'                      => 'SARP690630LV6'
                
            ],
            [

                'numero_operador'                   => '1251',
                'nombre_completo_operador'          => 'PEREZ XALA DENNY',
                'rfc_operador'                      => 'PEXD780527U86'
                
            ]
        );

        xxcust_fc_cp_gestion_operador::insert($operador);
    }
}
