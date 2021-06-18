<?php

namespace Database\Seeders;

use App\Models\Ubicacion\Ciudad;
use App\Models\Ubicacion\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //El Salvador
        Estado::create([
            'nombre_estado' => 'San Salvador',
            'id_pais' => 1,
        ]);
        //Ciudades de San Salvador
        Ciudad::create([
            'nombre_ciudad' => 'San salvador',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Aguilares',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Apopa',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Ayutuxtepeque',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Ciudad Delgado',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Cuscatancingo',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Paisnal',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Guazapa',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Ilopango',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Mejicanos',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Nejapa',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Panchimalco',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Rosario de Mora',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Marcos',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Martín',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santiago Texacuangos',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santo Tomás',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Soyapango',
            'id_estado' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Tonacatepeque',
            'id_estado' => 1,
        ]);


        //Ciudades de Ahuachapán
        Estado::create([
            'nombre_estado' => 'Ahuachapán',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Ahuachapán',
            'id_estado' => 2,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Apaneca',
            'id_estado' => 2,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Atiquizaya',
            'id_estado' => 2,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Concepción de Ataco',
            'id_estado' => 2,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Refugio',
            'id_estado' => 2,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Guaymango',
            'id_estado' => 2,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Jujutla',
            'id_estado' => 2,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Francisco Menéndez',
            'id_estado' => 2,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Lorenzo',
            'id_estado' => 2,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Pedro Puxtla',
            'id_estado' => 2,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Tacuba',
            'id_estado' => 2,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Turín',
            'id_estado' => 2,
        ]);


        //Ciudades de Cabañas
        Estado::create([
            'nombre_estado' => 'Cabañas',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Sensuntepeque',
            'id_estado' => 3,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Cinquera',
            'id_estado' => 3,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Dolores',
            'id_estado' => 3,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Guacotecti',
            'id_estado' => 3,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Ilobasco',
            'id_estado' => 3,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Jutiapa',
            'id_estado' => 3,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Isidro',
            'id_estado' => 3,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Tejutepeque',
            'id_estado' => 3,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Victoria',
            'id_estado' => 3,
        ]);


        //Ciudades de Chalatenango
        Estado::create([
            'nombre_estado' => 'Chalatenango',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Chalatenango',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Agua Caliente',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Arcatao',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Azacualpa',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Cancasque',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Citalá',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Comalapa',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Concepción Quezaltepeque',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Dulce Nombre de María',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Carrizal',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Paraíso',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'La Laguna',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'La Palma',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'La Reina',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Las Flores',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Las Vueltas',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Nombre de Jesús',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Nueva Concepción',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Nueva Trinidad',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Ojos de Agua',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Potonico',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Antonio de la Cruz',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Antonio Los Ranchos',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Fernando',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Francisco Lempa',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Francisco Morazán',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Ignacio',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Isidro Labrador',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Luis del Carmen',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Miguel de Mercedes',
            'id_estado' => 4,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Rafael',
            'id_estado' => 4,
        ]);


        Ciudad::create([
            'nombre_ciudad' => 'Santa Rita',
            'id_estado' => 4,
        ]);


        Ciudad::create([
            'nombre_ciudad' => 'Tejutla',
            'id_estado' => 4,
        ]);


        //Ciudades de Cuscatlán
        Estado::create([
            'nombre_estado' => 'Cuscatlán',
            'id_pais' => 1,
        ]);


        Ciudad::create([
            'nombre_ciudad' => 'Cojutepeque',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Candelaria',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Carmen',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Rosario',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Monte San Juan',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Oratorio de Concepción',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Bartolomé Perulapía',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Cristóbal',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San José Guayabal',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Pedro Perulapán',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Rafael Cedros',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Ramón',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santa Cruz Analquito',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santa Cruz Michapa',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Suchitoto',
            'id_estado' => 5,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Tenancingo',
            'id_estado' => 5,
        ]);

        //Ciudades de La libertad
        Estado::create([
            'nombre_estado' => 'La libertad',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santa Tecla',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Antiguo Cuscatlán',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Chiltiupán',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Ciudad Arce',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Colón',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Comasagua',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Huizúcar',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Jayaque',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Jicalapa',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'La Libertad',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Nuevo Cuscatlán',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Quezaltepeque',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Juan Opico',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Sacacoyo',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San José Villanueva',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Matías',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Pablo Tacachico',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Talnique',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Tamanique',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Teotepeque',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Tepecoyo',
            'id_estado' => 6,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Zaragoza',
            'id_estado' => 6,
        ]);

        //Ciudades de La paz
        Estado::create([
            'nombre_estado' => 'La paz',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Zacatecoluca',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Cuyultitán',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Rosario',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Jerusalén',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Mercedes La Ceiba',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Olocuilta',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Paraíso de Osorio',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Antonio Masahuat',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Emigdio',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Francisco Chinameca',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Pedro Masahuat',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Juan Nonualco',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Juan Talpa',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Juan Tepezontes',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Luis La Herradura',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Luis Talpa',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Miguel Tepezontes',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Pedro Nonualco',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Rafael Obrajuelo',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santa María Ostuma',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santiago Nonualco',
            'id_estado' => 7,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Tapalhuaca',
            'id_estado' => 7,
        ]);


        //Ciudades de La unión
        Estado::create([
            'nombre_estado' => 'La Unión',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'La Unión',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Anamorós',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Bolívar',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Concepción de Oriente',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Conchagua',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Carmen',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Sauce',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Intipucá',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Lislique',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Meanguera del Golfo',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Nueva Esparta',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Pasaquina',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Polorós',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Alejo',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San José',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santa Rosa de Lima',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Yayantique',
            'id_estado' => 8,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Yucuaiquín',
            'id_estado' => 8,
        ]);


        //Ciudades de Morazán
        Estado::create([
            'nombre_estado' => 'Morazán',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Francisco Gotera',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Arambala',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Cacaopera',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Corinto',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Delicias de Concepción',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Divisadero',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Rosario',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Gualococti',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Guatajiagua',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Joateca',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Jocoaitique',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Jocoro',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Lolotiquillo',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Meanguera',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Osicala',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Perquín',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Carlos',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Fernando',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Isidro',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Simón',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Sensembra',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Sociedad',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Torola',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Yamabal',
            'id_estado' => 9,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Yoloaiquín',
            'id_estado' => 9,
        ]);


        //Ciudades de San Miguel
        Estado::create([
            'nombre_estado' => 'San Miguel',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Miguel',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Carolina',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Chapeltique',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Chinameca',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Chirilagua',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Ciudad Barrios',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Comacarán',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Tránsito',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Lolotique',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Moncagua',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Nueva Guadalupe',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Nuevo Edén de San Juan',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Quelepa',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Antonio',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Gerardo',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Jorge',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Luis de la Reina',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Rafael Oriente',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Sesori',
            'id_estado' => 10,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Uluazapa',
            'id_estado' => 10,
        ]);


        //Ciudades de San Vicente
        Estado::create([
            'nombre_estado' => 'San Vicente',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Vicente',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Apastepeque',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Guadalupe',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Cayetano Istepeque',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Esteban Catarina',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Ildefonso',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Lorenzo',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Sebastián',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santa Clara',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santo Domingo',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Tecoluca',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Tepetitán',
            'id_estado' => 11,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Verapaz',
            'id_estado' => 11,
        ]);


        //Ciudades de Santa Ana
        Estado::create([
            'nombre_estado' => 'Santa Ana',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santa Ana',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Candelaria de la Frontera',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Chalchuapa',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Coatepeque',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Congo',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Porvenir',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Masahuat',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Metapán',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Antonio Pajonal',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Sebastián Salitrillo',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santa Rosa Guachipilín',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santiago de la Frontera',
            'id_estado' => 12,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Texistepeque',
            'id_estado' => 12,
        ]);


        //Ciudades de Sonsonate
        Estado::create([
            'nombre_estado' => 'Sonsonate',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Sonsonate ',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Acajutla',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Armenia',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Caluco',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Cuisnahuat',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Izalcos',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Juayúa',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Nahuizalco',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Nahulingo',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Salcoatitán',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Antonio del Monte',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'San Julián',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santa Catarina Masahuat',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santa Isabel Ishuatán',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Santo Domingo de Guzmán',
            'id_estado' => 13,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Sonzacate',
            'id_estado' => 13,
        ]);


        //Ciudades de Usulután
        Estado::create([
            'nombre_estado' => 'Usulután',
            'id_pais' => 1,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Usulután',
            'id_estado' => 14,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Alegría',
            'id_estado' => 14,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Berlín',
            'id_estado' => 14,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'California',
            'id_estado' => 14,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Concepción Batres',
            'id_estado' => 14,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'El Triunfo',
            'id_estado' => 14,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Ereguayquín',
            'id_estado' => 14,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Estanzuelas',
            'id_estado' => 14,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Jiquilisco',
            'id_estado' => 14,
        ]);

        Ciudad::create([
            'nombre_ciudad' => 'Jucuapa',
            'id_estado' => 14,
        ]);
    }
}
