<?php

use Illuminate\Database\Seeder;

class TuristictypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('turistic_type_companies')->insert(array (
        'name'	      => 'Agencia de Viajes',
        'description' => 'Una agencia de viajes es una empresa asociada al turismo, cuyo oficio es la intermediación, organización y realización de proyectos, planes e itinerarios, elaboración y venta de productos turísticos entre sus clientes y determinados proveedores de viajes.',
        'service_type' => 'Aereo o Terrestre',
        'slug' => 'agenciadeviajes'
        ));
        \DB::table('turistic_type_companies')->insert(array (
        'name'	      => 'Guía Turristica',
        'description' => 'Una guía turística incluirá generalmente detalles de interés para el viajero tales como números de teléfono, direcciones, precios y valoraciones de hoteles y otro tipo de alojamientos y restaurantes. Asimismo, indicará los principales medios de transporte disponibles y puntos de embarque, itinerarios, precios o forma de adquirir los billetes.',
        'service_type' => 'Caminata o Bus',
        'slug' => 'guiaturistica'
        ));
        \DB::table('turistic_type_companies')->insert(array (
        'name'        => 'Servicio de Salud',
        'description' => 'Los servicios de salud son uno de los sectores fundamentales de la sociedad y la economía. Proporcionar protección social de la salud e igualdad de acceso a una atención de salud de calidad tiene considerables efectos positivos en la salud individual y pública, además de potenciar el crecimiento económico y el desarrollo.',
        'service_type' => 'Salud',
        'slug' => 'serviciodesalud'
        ));
        \DB::table('turistic_type_companies')->insert(array (
        'name'        => 'Servicio de Alimentación',
        'description' => 'En general un Servicio de Alimentación puede definirse como “la organización, que tiene como finalidad elaborar y/o distribuir alimentación científicamente planificada de acuerdo a recomendaciones nutricionales nacionales e intern acionales, a través de platos preparados u otras preparaciones culinarias, de acuerdo a estándares técnicos y sanitarios; destinado a pacientes hospitalizados, pacientes ambulatorios, usuarios sanos o clientes en general”.',
        'service_type' => 'Alimentos',
        'slug' => 'serviciodealimentacion'
        ));
        \DB::table('turistic_type_companies')->insert(array (
        'name'        => 'Alojamiento',
        'description' => 'Alojamiento es un arte el hospedar. El uso más frecuente del término está vinculado al lugar donde las personas pernoctan o acampan, generalmente en medio de un viaje o durante las vacaciones. Los hoteles, los albergues y las posadas son tipos de alojamiento.',
        'service_type' => 'Alojamiento',
        'slug' => 'alojamiento'
        ));
        \DB::table('turistic_type_companies')->insert(array (
        'name'        => 'Hotel',
        'description' => 'Espacio donde Usted encontrará la mayor comodidad y excelencia hotelera, con la calidez y distinción que se merece. Para aquellas estadías en que la privacidad y tranquilidad son necesarias para un merecido descanso ó permanencia por negocios.',
        'service_type' => 'Hotel',
        'slug' => 'hotel'
        ));
        \DB::table('turistic_type_companies')->insert(array (
        'name'        => 'Residencial',
        'description' => 'La residencia es una de las construcciones más esenciales para el ser humano ya que es el espacio en el que normalmente se está la mayor parte del tiempo de la vida, o incluso el espacio en el que uno se debe sentir más cómodo y a gusto, con lugar para relajarse pero también para sentirse protegido del medio ambiente.',
        'service_type' => 'Residencial',
        'slug' => 'residencial'
        ));
        \DB::table('turistic_type_companies')->insert(array (
        'name'        => 'Posadas',
        'description' => 'Establecimiento de hostelería de antigua tradición para dar albergue a viajeros. Se trataba de edificios de hospedaje que incluían comida, bebida y un espacio para dormir, además de instalaciones para la carga, el equipaje, los carros y caballerías que pudieran acompañarles.',
        'service_type' => 'Posadas',
        'slug' => 'posada'
        ));
        \DB::table('turistic_type_companies')->insert(array (
        'name'	      => 'Servicio de Transporte',
        'description' => 'Una de las actividades terciarias que mayor expansión ha experimentado a lo largo de los últimos dos siglos, debido a la industrialización; al aumento del comercio y de los desplazamientos humanos tanto a escala nacional como internacional; y los avances técnicos que se han producido y que han repercutido en una mayor rapidez, capacidad, seguridad y menor coste de los transportes.',
        'service_type' => 'Terrestre o Maritimo o Ferroviario',
        'slug' => 'serviciodetransporte'
        ));
        \DB::table('turistic_type_companies')->insert(array (
        'name'	      => 'Servicio de Informacion',
        'description' => 'El Servicio de Información Local (SIL), es un servicio bibliotecario destinado a coadyuvar en la resolución de las necesidades de información más cotidianas de las personas, mismas que son solucionadas a partid de materiales informativos que han sido desarrollados de forma local para ser usados por las personas que ahí habitan (información local).',
        'service_type' => 'Informante',
        'slug' => 'informacion'
        ));
        \DB::table('turistic_type_companies')->insert(array (
        'name'        => 'Intermediacion',
        'description' => 'La intermediación turística engloba a las agencias de viajes (se dedican a la venta o comercialización de viajes combinados), a las excursiones de un día, la mediación en la venta de billetes o reserva de plazas en toda clase de medios de transporte, la reserva y contratación de alojamiento en establecimientos turísticos, y de servicios o actividades ofrecidos por las empresas turísticas.',
        'service_type' => 'Intermediacion',
        'slug' => 'intermediacion'
        ));
    }
}
