<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\xxcust_fc_cp_gestion_domicilio;

class DomicilioSucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sucursales = array(
            [

                'id_enlace_domicilio'            => '598',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO SUMINISTROS OFICINAS GENERALES',
                'calle_domicilio'                => 'PROLONGACION SALVADOR DIAZ MIRON',
                'numero_ext_domicilio'           => '4751',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91936',
                'clave_colonia_domicilio'        => '0583',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '095',
                'tipo_domicilio'                 => 'ALMACEN',
                'nombre_domicilio'               => 'PUBLICIDAD',
                'calle_domicilio'                => 'PROLONGACION SALVADOR DIAZ MIRON',
                'numero_ext_domicilio'           => '4751',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91936',
                'clave_colonia_domicilio'        => '0583',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '097',
                'tipo_domicilio'                 => 'ALMACEN',
                'nombre_domicilio'               => 'FOTO SERVICIO TECNICO LABORATORIOS',
                'calle_domicilio'                => 'PROLONGACION SALVADOR DIAZ MIRON',
                'numero_ext_domicilio'           => '4751',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91936',
                'clave_colonia_domicilio'        => '0583',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '007',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO INDEPENDENCIA',
                'calle_domicilio'                => 'INDEPENDENCIA ENTRE CANAL Y ESTEBAN MORALES',
                'numero_ext_domicilio'           => '1548',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91700',
                'clave_colonia_domicilio'        => '0499',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '009',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO COYOL VERACRUZ',
                'calle_domicilio'                => 'EJE 1 SUR PONIENTE CTO COM AEROPUERTO',
                'numero_ext_domicilio'           => '101',
                'numero_int_domicilio'           => 'LOCAL 1-2B',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91779',
                'clave_colonia_domicilio'        => '5055',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '012',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA MOCAMBO VERACRUZ',
                'calle_domicilio'                => 'JUAN PABLO II ENTRE R. HEROLES Y R. CORTINEZ',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => 'LOCALES 17 AL 20',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '94294',
                'clave_colonia_domicilio'        => '2765',
                'clave_localidad_domicilio'      => '03',
                'clave_municipio_domicilio'      => '028',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '013',
                'tipo_domicilio'                 => 'MAYOREO',
                'nombre_domicilio'               => 'FOTO MAYOREO VERACRUZ',
                'calle_domicilio'                => 'INDEPENDENCIA',
                'numero_ext_domicilio'           => '1548',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91700',
                'clave_colonia_domicilio'        => '0499',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '014',
                'tipo_domicilio'                 => 'ALMACEN',
                'nombre_domicilio'               => 'FOTO ALMACEN VERACRUZ',
                'calle_domicilio'                => 'PROL MIGUEL ALEMAN',
                'numero_ext_domicilio'           => '1806',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91789',
                'clave_colonia_domicilio'        => '0541',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '071',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA CRYSTAL VERACRUZ',
                'calle_domicilio'                => 'PROL DIAZ MIRON ESQ L. KIEL  ZONA A CTO. COM. PLAZA CRYSTAL',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => 'LOCALES 4-6',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91920',
                'clave_colonia_domicilio'        => '0577',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '091',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA LAS AMERICAS VERACRUZ',
                'calle_domicilio'                => 'AV ADOLFO RUIZ CORTINEZ Y AV LAS AMERICAS CTO. COM. PLAZA AMERICA',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => 'LOCALES 13 AL 16',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '94298',
                'clave_colonia_domicilio'        => '2797',
                'clave_localidad_domicilio'      => '03',
                'clave_municipio_domicilio'      => '028',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '113',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA DEL PUERTO VERACRUZ',
                'calle_domicilio'                => 'AV. RAFAEL CUERVO ESQ. DR. JOAQUIN PEREA BLANCO  ZONA A CTO. COM. PLAZA DEL PUERTO',
                'numero_ext_domicilio'           => '1150',
                'numero_int_domicilio'           => 'LOCALES 1-2-5-7-8',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91855',
                'clave_colonia_domicilio'        => '1047',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '119',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA PATIO TEJERIA',
                'calle_domicilio'                => 'AV. VERACRUZ INDUSTRIAL PARK S/N FRACCION 1 LOTE 1 MANZANA 1',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91697',
                'clave_colonia_domicilio'        => '0496',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '146',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO CARDEL',
                'calle_domicilio'                => 'FLORES MAGON',
                'numero_ext_domicilio'           => '51',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91680',
                'clave_colonia_domicilio'        => '0478',
                'clave_localidad_domicilio'      => '35',
                'clave_municipio_domicilio'      => '016',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '547',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA SANTA ANA VERACRUZ',
                'calle_domicilio'                => 'AV. DE LAS AMERICAS  CASI ESQ. URANO  CTO. COM. PLAZA SANTA ANA',
                'numero_ext_domicilio'           => '400',
                'numero_int_domicilio'           => 'LOCALES 4 al 6',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '94290',
                'clave_colonia_domicilio'        => '4545',
                'clave_localidad_domicilio'      => '03',
                'clave_municipio_domicilio'      => '028',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '023',
                'tipo_domicilio'                 => 'MAYOREO',
                'nombre_domicilio'               => 'FOTO MAYOREO VILLAHERMOSA',
                'calle_domicilio'                => 'P. USUMACINTA GLORIETA FUENTE MAYA Y CARR A TEAPAN',
                'numero_ext_domicilio'           => '100',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86190',
                'clave_colonia_domicilio'        => '0120',
                'clave_localidad_domicilio'      => '02',
                'clave_municipio_domicilio'      => '004',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '025',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA OLMECA VILLAHERMOSA',
                'calle_domicilio'                => 'AV RUIZ CORTINEZ ZONA A CTO. COM. PLAZA OLMECA',
                'numero_ext_domicilio'           => '1310',
                'numero_int_domicilio'           => 'LOCAL 10',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86035',
                'clave_colonia_domicilio'        => '1492',
                'clave_localidad_domicilio'      => '02',
                'clave_municipio_domicilio'      => '004',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '027',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO CENTRO VILLAHERMOSA',
                'calle_domicilio'                => 'LERDO',
                'numero_ext_domicilio'           => '310',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86000',
                'clave_colonia_domicilio'        => '002',
                'clave_localidad_domicilio'      => '02',
                'clave_municipio_domicilio'      => '004',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '033',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO CARDENAS CENTRO',
                'calle_domicilio'                => 'MORELOS ESQ VICENTE GUERRERO',
                'numero_ext_domicilio'           => '317',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86500',
                'clave_colonia_domicilio'        => '0455',
                'clave_localidad_domicilio'      => '01',
                'clave_municipio_domicilio'      => '002',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '035',
                'tipo_domicilio'                 => 'ALMACEN',
                'nombre_domicilio'               => 'FOTO ALMACEN VILLAHERMOSA',
                'calle_domicilio'                => 'AV. ACERO',
                'numero_ext_domicilio'           => '306',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86010',
                'clave_colonia_domicilio'        => '0011',
                'clave_localidad_domicilio'      => '02',
                'clave_municipio_domicilio'      => '004',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '060',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA LAS AMERICAS VILLAHERMOSA',
                'calle_domicilio'                => 'AV. RAMON MENDOZA ENTRE ESQ. AV. UNIVERSIDAD CTO. COM.PLAZA LAS AMERICAS',
                'numero_ext_domicilio'           => '102',
                'numero_int_domicilio'           => 'LOCAL D1-D3',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86029',
                'clave_colonia_domicilio'        => '0028',
                'clave_localidad_domicilio'      => '02',
                'clave_municipio_domicilio'      => '004',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '063',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA CRYSTAL VILLAHERMOSA',
                'calle_domicilio'                => 'AV H COLEGIO MILITAR ENTRE ESQ. AV. QUINTIN ARAUZ Y 10 DE MAYO CTO. COM. PLAZA CRYSTAL',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => 'LOCALES 9-12',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86100',
                'clave_colonia_domicilio'        => '0082',
                'clave_localidad_domicilio'      => '02',
                'clave_municipio_domicilio'      => '004',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '074',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO MADERO VILLAHERMOSA',
                'calle_domicilio'                => 'FRANCISCO I MADERO ENTRE MARIA CARMEN SANCHEZ Y GREGORIO MENDEZL',
                'numero_ext_domicilio'           => '620',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86000',
                'clave_colonia_domicilio'        => '002',
                'clave_localidad_domicilio'      => '02',
                'clave_municipio_domicilio'      => '004',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '084',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA CRYSTAL CARDENAS',
                'calle_domicilio'                => 'REYES HDEZ. Y JACINTO LÓPEZ CTO. COM. P. CRYSTAL',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => 'LOCALES 8 al 12',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86500',
                'clave_colonia_domicilio'        => '0455',
                'clave_localidad_domicilio'      => '01',
                'clave_municipio_domicilio'      => '002',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '106',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO COMALCALCO',
                'calle_domicilio'                => 'BENITO JUAREZ  ESQ NICOLAS BRAVO Y MIGUEL LERDO',
                'numero_ext_domicilio'           => '501',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86300',
                'clave_colonia_domicilio'        => '0247',
                'clave_localidad_domicilio'      => '03',
                'clave_municipio_domicilio'      => '005',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '134',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO MACUSPANA',
                'calle_domicilio'                => 'REFORMA',
                'numero_ext_domicilio'           => '320-B',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86706',
                'clave_colonia_domicilio'        => '0652',
                'clave_localidad_domicilio'      => '07',
                'clave_municipio_domicilio'      => '012',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '136',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PARAISO VILLAHERMOSA',
                'calle_domicilio'                => 'BLVD MANUEL ANTONIO ROMERO ZURITA ENTRE MADRID Y MAGISTERIAL',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => 'LOCAL SUB-ANCLA 3',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '86605',
                'clave_colonia_domicilio'        => '0485',
                'clave_localidad_domicilio'      => '10',
                'clave_municipio_domicilio'      => '014',
                'clave_estado_domicilio'         => 'TAB',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '024',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA CRYSTAL MINATITLAN',
                'calle_domicilio'                => 'CARRET. TRANSIST. COSOLEACAQUE-MINATITLÁN KM 264  ESQ. E. ZAPATA CTO. COM. P. CRYSTAL MINATITLÁN',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => 'LOCAL 32 AL 35',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '96710',
                'clave_colonia_domicilio'        => '3927',
                'clave_localidad_domicilio'      => '11',
                'clave_municipio_domicilio'      => '108',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '028',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO CATEDRAL COATZACOALCOS',
                'calle_domicilio'                => 'AV BENITO JUAREZ ENTRE 16 DE SEPTIEMBRE Y VENUSTIANO CARRANZA',
                'numero_ext_domicilio'           => '307',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '96400',
                'clave_colonia_domicilio'        => '3826',
                'clave_localidad_domicilio'      => '06',
                'clave_municipio_domicilio'      => '039',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '034',
                'tipo_domicilio'                 => 'MAYOREO',
                'nombre_domicilio'               => 'FOTO MAYOREO COATZACOALCOS',
                'calle_domicilio'                => 'AV BENITO JUAREZ ENTRE 16 DE SEPTIEMBRE Y VENUSTIANO CARRANZA',
                'numero_ext_domicilio'           => '411',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '96400',
                'clave_colonia_domicilio'        => '3826',
                'clave_localidad_domicilio'      => '06',
                'clave_municipio_domicilio'      => '39',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '577',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO ACAYUCAN',
                'calle_domicilio'                => 'JUAN DE LA LUZ  ENTRE YUCATAN Y RAMON CORONA CTO. COM. P. CRYSTAL',
                'numero_ext_domicilio'           => '711',
                'numero_int_domicilio'           => 'LOCALES 25 al 28 Zona A',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '96056',
                'clave_colonia_domicilio'        => '3683',
                'clave_localidad_domicilio'      => '01',
                'clave_municipio_domicilio'      => '003',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '040',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO CENTRO POZA RICA',
                'calle_domicilio'                => '6 ORIENTE',
                'numero_ext_domicilio'           => '301',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '93260',
                'clave_colonia_domicilio'        => '2246',
                'clave_localidad_domicilio'      => '14',
                'clave_municipio_domicilio'      => '131',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '043',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO TUXPAN',
                'calle_domicilio'                => 'MORELOS',
                'numero_ext_domicilio'           => '20-A',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '92800',
                'clave_colonia_domicilio'        => '1691',
                'clave_localidad_domicilio'      => '16',
                'clave_municipio_domicilio'      => '189',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '045',
                'tipo_domicilio'                 => 'ALMACEN',
                'nombre_domicilio'               => 'FOTO ALMACEN POZA RICA',
                'calle_domicilio'                => 'CARR MEX-TUXPAN KM 238',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '92903',
                'clave_colonia_domicilio'        => '1724',
                'clave_localidad_domicilio'      => '',
                'clave_municipio_domicilio'      => '175',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '066',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA CRYSTAL POZA RICA',
                'calle_domicilio'                => 'BLVD LAZARO CARDENAS  CTO. COM. P. CRYSTAL',
                'numero_ext_domicilio'           => '807',
                'numero_int_domicilio'           => 'LOCALES A8-A9',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '93340',
                'clave_colonia_domicilio'        => '2279',
                'clave_localidad_domicilio'      => '14',
                'clave_municipio_domicilio'      => '131',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '070',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA CRYSTAL TUXPAN',
                'calle_domicilio'                => 'BLVD.  DEMETRIO RUIZ  MALERVA  CTO COM. PLAZA CRYSTAL',
                'numero_ext_domicilio'           => '65',
                'numero_int_domicilio'           => 'LOCALES 2-3I/2-3E',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '92860',
                'clave_colonia_domicilio'        => '1709',
                'clave_localidad_domicilio'      => '16',
                'clave_municipio_domicilio'      => '189',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '102',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO MERCADOS POZA RICA',
                'calle_domicilio'                => 'BLVD. A. RUIZ CORTINEZ',
                'numero_ext_domicilio'           => '219',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '93330',
                'clave_colonia_domicilio'        => '2277',
                'clave_localidad_domicilio'      => '14',
                'clave_municipio_domicilio'      => '131',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '124',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO GRAN PATIO POZA RICA',
                'calle_domicilio'                => 'CARRET POZA RICA - CAZONES KM 50 ENTRE SOBRE LA CARRETERA POZA RICA Y A CAZONES CTO. COM. GRAN PATIO',
                'numero_ext_domicilio'           => '4706',
                'numero_int_domicilio'           => 'LOCAL S04-S11',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '93306',
                'clave_colonia_domicilio'        => '2267',
                'clave_localidad_domicilio'      => '14',
                'clave_municipio_domicilio'      => '131',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '138',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PAPANTLA',
                'calle_domicilio'                => 'AV. JUAN DE LA LUZ ENRIQUEZ ENTRE GUTIERREZ ZAMORA Y PINO SUAREZ',
                'numero_ext_domicilio'           => '102-B',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '93400',
                'clave_colonia_domicilio'        => '2303',
                'clave_localidad_domicilio'      => '13',
                'clave_municipio_domicilio'      => '124',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '542',
                'tipo_domicilio'                 => 'MAYOREO',
                'nombre_domicilio'               => 'FOTO MAYOREO POZA RICA',
                'calle_domicilio'                => 'AV H. COLEGIO MILITAR ESQ 8 NORTE',
                'numero_ext_domicilio'           => '501',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '93260',
                'clave_colonia_domicilio'        => '2246',
                'clave_localidad_domicilio'      => '14',
                'clave_municipio_domicilio'      => '131',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '048',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA CRYSTAL XALAPA',
                'calle_domicilio'                => 'AV. LÁZARO CÁRDENAS CTO. COM.P. CRYSTAL',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => 'LOCALES 7 al 10 Zona B',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91180',
                'clave_colonia_domicilio'        => '0154',
                'clave_localidad_domicilio'      => '10',
                'clave_municipio_domicilio'      => '087',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '056',
                'tipo_domicilio'                 => 'MAYOREO',
                'nombre_domicilio'               => 'FOTO MAYOREO XALAPA',
                'calle_domicilio'                => 'CTO. COM. PZA. CRYSTAL',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => 'LOCALES 7-8-9-10-SEC. B',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91180',
                'clave_colonia_domicilio'        => '0154',
                'clave_localidad_domicilio'      => '10',
                'clave_municipio_domicilio'      => '087',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '052',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO CENTRO CORDOBA',
                'calle_domicilio'                => 'AV 3  ENTRE CALLE 3 Y CALLE 5',
                'numero_ext_domicilio'           => '324',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '94500',
                'clave_colonia_domicilio'        => '2926',
                'clave_localidad_domicilio'      => '07',
                'clave_municipio_domicilio'      => '044',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '053',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO CENTRO ORIZABA',
                'calle_domicilio'                => 'PONIENTE 2  ESQ. NORTE 1',
                'numero_ext_domicilio'           => '2',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '94300',
                'clave_colonia_domicilio'        => '2805',
                'clave_localidad_domicilio'      => '12',
                'clave_municipio_domicilio'      => '118',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '067',
                'tipo_domicilio'                 => 'MAYOREO',
                'nombre_domicilio'               => 'FOTO MAYOREO CORDOBA',
                'calle_domicilio'                => 'AV 3  ENTRE CALLE 3 Y CALLE 5',
                'numero_ext_domicilio'           => '324',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '94500',
                'clave_colonia_domicilio'        => '2926',
                'clave_localidad_domicilio'      => '07',
                'clave_municipio_domicilio'      => '044',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '072',
                'tipo_domicilio'                 => 'ALMACEN',
                'nombre_domicilio'               => 'FOTO ALMACEN CORDOBA',
                'calle_domicilio'                => 'CALLE 27 ENTRE AV 3 Y AV 5',
                'numero_ext_domicilio'           => '305',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '94640',
                'clave_colonia_domicilio'        => '3006',
                'clave_localidad_domicilio'      => '07',
                'clave_municipio_domicilio'      => '044',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '073',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA CRYSTAL CORDOBA',
                'calle_domicilio'                => 'AV 21 Y PROL CALLE 10 CTO COM PLAZA CRYSTAL',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => 'LOCAL 1-2',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '94570',
                'clave_colonia_domicilio'        => '2973',
                'clave_localidad_domicilio'      => '07',
                'clave_municipio_domicilio'      => '044',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '128',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PROMOVENTA CORDOBA',
                'calle_domicilio'                => 'PROLONGACION AV. 21 Y CALLE 10',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '94570',
                'clave_colonia_domicilio'        => '2973',
                'clave_localidad_domicilio'      => '07',
                'clave_municipio_domicilio'      => '044',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '558',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO MERCADO CORDOBA',
                'calle_domicilio'                => 'CALLE 9 ENTRE AVENIDA 2 Y CALLE 7',
                'numero_ext_domicilio'           => '200',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '94500',
                'clave_colonia_domicilio'        => '2926',
                'clave_localidad_domicilio'      => '07',
                'clave_municipio_domicilio'      => '044',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '135',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO TIENDA VIRTUAL',
                'calle_domicilio'                => 'AV PROLONGACION SALVADOR DIAZ MIRON',
                'numero_ext_domicilio'           => '4751',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91936',
                'clave_colonia_domicilio'        => '0583',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '141',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO TIENDA LINIO',
                'calle_domicilio'                => 'AV PROLONGACION SALVADOR DIAZ MIRON',
                'numero_ext_domicilio'           => '4751',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91936',
                'clave_colonia_domicilio'        => '0583',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '143',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO TIENDA AMAZON',
                'calle_domicilio'                => 'AV PROLONGACION SALVADOR DIAZ MIRON',
                'numero_ext_domicilio'           => '4751',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91936',
                'clave_colonia_domicilio'        => '0583',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '144',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO MERCADO LIBRE',
                'calle_domicilio'                => 'AV PROLONGACION SALVADOR DIAZ MIRON',
                'numero_ext_domicilio'           => '4751',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '91936',
                'clave_colonia_domicilio'        => '0583',
                'clave_localidad_domicilio'      => '17',
                'clave_municipio_domicilio'      => '193',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '088',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO CENTRO MARTINEZ DE LA TORRE',
                'calle_domicilio'                => 'MORELOS  ENTRE PEDRO BELLI Y M. OCAMPO',
                'numero_ext_domicilio'           => '202',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '93600',
                'clave_colonia_domicilio'        => '2421',
                'clave_localidad_domicilio'      => '',
                'clave_municipio_domicilio'      => '102',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '094',
                'tipo_domicilio'                 => 'MAYOREO',
                'nombre_domicilio'               => 'FOTO MAYOREO MARTINEZ DE LA TORRE',
                'calle_domicilio'                => 'MORELOS  ENTRE PEDRO BELLI Y M. OCAMPO',
                'numero_ext_domicilio'           => '202',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '93600',
                'clave_colonia_domicilio'        => '2421',
                'clave_localidad_domicilio'      => '',
                'clave_municipio_domicilio'      => '102',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '593',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAZA CRYSTAL MARTINEZ DE LA TORRE',
                'calle_domicilio'                => 'BLVD. ALFINIO FLORES ENTRE CALLES MOCTEZUMA Y FLORES MAGON CTO. COM. P. CRYSTAL',
                'numero_ext_domicilio'           => '903',
                'numero_int_domicilio'           => 'LOCALES 1 al 4',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '93607',
                'clave_colonia_domicilio'        => '1760',
                'clave_localidad_domicilio'      => '',
                'clave_municipio_domicilio'      => '102',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '596',
                'tipo_domicilio'                 => 'ALMACEN',
                'nombre_domicilio'               => 'FOTO ALMACEN MARTINEZ DE LA TORRE',
                'calle_domicilio'                => 'MORELOS ENTRE PEDRO BELLI Y M. OCAMPO',
                'numero_ext_domicilio'           => '202',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '93600',
                'clave_colonia_domicilio'        => '2421',
                'clave_localidad_domicilio'      => '',
                'clave_municipio_domicilio'      => '102',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '129',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO COSAMALOAPAN',
                'calle_domicilio'                => 'AVE. MIGUEL HIDALGO A. RUIZ CORTINEZ Y M. OCAMPO',
                'numero_ext_domicilio'           => '404',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '95400',
                'clave_colonia_domicilio'        => '3329',
                'clave_localidad_domicilio'      => '19',
                'clave_municipio_domicilio'      => '045',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '145',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO ISLA',
                'calle_domicilio'                => 'AV. RAUL SANDOVAL ENTRE NETZAHUALCOYOTL Y CUAUHTEMOC',
                'numero_ext_domicilio'           => '71',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '95640',
                'clave_colonia_domicilio'        => '4771',
                'clave_localidad_domicilio'      => '31',
                'clave_municipio_domicilio'      => '077',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '147',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO PLAYA VICENTE',
                'calle_domicilio'                => 'INDEPENDENCIA ENTRE BENITO JUAREZ Y 16 DE SEPTIEMBRE',
                'numero_ext_domicilio'           => '300',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '95600',
                'clave_colonia_domicilio'        => '3393',
                'clave_localidad_domicilio'      => '38',
                'clave_municipio_domicilio'      => '130',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '599',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO TIERRA BLANCA',
                'calle_domicilio'                => 'INDEPENDENCIA  ENTRE A.SERDAN Y R.CORTINEZ',
                'numero_ext_domicilio'           => '620',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '95100',
                'clave_colonia_domicilio'        => '3215',
                'clave_localidad_domicilio'      => '18',
                'clave_municipio_domicilio'      => '174',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '125',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO SAN ANDRES CENTRO',
                'calle_domicilio'                => 'AV. VENUSTIANO CARRANZA ENTRE ESQ. DR. BERNARDO PEÑA Y MIGUEL CERVANTES SAAVEDRA',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '95700',
                'clave_colonia_domicilio'        => '3447',
                'clave_localidad_domicilio'      => '15',
                'clave_municipio_domicilio'      => '141',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '127',
                'tipo_domicilio'                 => 'ALMACEN',
                'nombre_domicilio'               => 'FOTO ALMACEN SAN ANDRES',
                'calle_domicilio'                => 'AV. VENUSTIANO CARRANZA S/N ESQ. DR. BERNARDO PEÑA',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '95700',
                'clave_colonia_domicilio'        => '3447',
                'clave_localidad_domicilio'      => '15',
                'clave_municipio_domicilio'      => '141',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '132',
                'tipo_domicilio'                 => 'TIENDA',
                'nombre_domicilio'               => 'FOTO CATEMACO',
                'calle_domicilio'                => 'MARIA BOETTIGER ENTRE VENUSTIANO CARRANZA Y ALDAMA',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '95870',
                'clave_colonia_domicilio'        => '3619',
                'clave_localidad_domicilio'      => '45',
                'clave_municipio_domicilio'      => '032',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
            [

                'id_enlace_domicilio'            => '137',
                'tipo_domicilio'                 => 'MAYOREO',
                'nombre_domicilio'               => 'FOTO MAYOREO SAN ANDRES',
                'calle_domicilio'                => 'AV. VENUSTIANO CARRANZA S/N ESQ DR BERNARDO PEÑA',
                'numero_ext_domicilio'           => 'S/N',
                'numero_int_domicilio'           => '',
                'referencia_domicilio'           => '',
                'cp_domicilio'                   => '95700',
                'clave_colonia_domicilio'        => '3447',
                'clave_localidad_domicilio'      => '15',
                'clave_municipio_domicilio'      => '141',
                'clave_estado_domicilio'         => 'VER',
                'clave_pais_domicilio'           => 'MEX'

            ],
        );

            xxcust_fc_cp_gestion_domicilio::insert($sucursales);
    }
}
