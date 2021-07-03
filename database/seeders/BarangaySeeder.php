<?php

namespace Database\Seeders;

use App\Models\Barangay;
use App\Models\Station;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $davaoBarangays = [
            array('23-C Mini Forest', '22-C Piape Quezon Blvd', '21-C Piape Quezon Blvd', '31-D Trading Blvd', 'Agdao Proper', '13-B, J.P. Laurel Ave.', '14-B Lapu-lapu St.', '15-B Sobrecarey St. Bo. Obrero', '16-B 33 Lupo Diaz St., Bo. Obrero', '17-B Nidea/Porras Sts. Bo. Obrero', '18-B Iñigo Porras St., Bo. Obrero', '20-B Porras Veloso St., Bo. Obrero', '24-C Cor. Guerero/Aurora Sts.', '25-C Quezon Blvd', '26-C Juan Luna St.', '27-C 3rd Ave Leon Garcia St.', '28-C Cor Juan Luna/Pioneer Sts', '29-C Cor Juan Luna/Jacinto', '30-C Villa Abrille St.', '32-D Jacinto St.', '33-D Bonifacio', '36-D Mabini Quezon Blvd', '37-D Trading Blvd', 'Centro San Juan Vill. R. Castillo', 'Leon Garcia', 'Lapu-lapu, Maya-Maya Jerome', 'Paciano Bangoy/Cory Village Dacudao Ave.', 'Ubalde-Ubalde St., R. Castillo', 'Rafael Castillo – Executive Homes, Lanang', 'San Antonio – NHA Saint Anthony Vill, Agdao', 'Tomas Monteverde', 'Vicente Duterte', 'Wilfredo Aquino', '30-D Villa Abrille St.'),
            array('1-A Bolton St.', '2-A Magallanes Riverside', '3-A-E.Quirino Ave', '4-A-Camus cor. Quirino', '5-A DatuBago Ext, Bankerohan', '6-A San Pedro Ext.', '7-A-Mt. Apo St.', '8-A Fr. Selga St.', '9-A-Camus Ext.', '10-A-Tiongco Ave', '11-B-V.Mapa St.', '12-B-V.Mapa St.', '19-B-Garcia Heights, Bajada', '34-D-CM Recto', '35-D-Simeon De Jesus St., Rizal Ext', '37-D-Purok, Trading', '38-D Rizal Ext.', '39-D Quimpo Blvd', '40-D-Bolton Ext.', '76-B SeaWall'),
            array('Ma-a', 'Magtuod', 'Langub', 'Talomo', 'Matina Pangi', 'Catalunan Grande'),
            array('Panacan – Panacan', 'Sasa – Sasa', 'Pampanga – Sasa', 'Hizon – Sasa', 'Angliongto – Mamay Road, Lanang'),
            array('Buhangin', 'Cabantian', 'Communal'),
            array('Bunawan', 'Gatungan', 'Mahayag', 'Mudiang', 'Lasang', 'San Isidro', 'Ilang', 'Tibungco'),
            array('Malabog', 'Colasas', 'Mapula', 'Pañalum', 'Mabuhay', 'Sumimao', 'Fatima', 'Paquibato Proper', 'Paradise Embac', 'Lumiad', 'Pandaitan', 'Tapak', 'Salapawan'),
            array('Daliaon Plantation', 'Kilate', 'Tungkalan', 'Sibulan', 'Atan Owe', 'Bankas Heights', 'Baracatan', 'Bato', 'Bayabas', 'Camansi', 'Catigan', 'Eden', 'Crossing Bayabas', 'Toril Poblacion', 'Tibuloy', 'Tagurano', 'Sirawan', 'Tagluno', 'Sibulan', 'Mulig', 'Marapangi', 'Lubogan', 'Lizada', 'Daliao', 'Catigan'),
            array('New Carmen', 'Biao Eskuela', 'Tacunan', 'Talandang', 'New Valencia', 'Guianga', 'Tugbok Proper', 'Mintal', 'BagoOshiro', 'Los Amigos', 'Angalan', 'Manambulan', 'Ola', 'Tagakpan', 'Matina Biao'),
            array('Dominga', 'Dalagdag', 'Tamayong', 'Pangyan', 'Saloy', 'Lampiano', 'Calinan Poblacion', 'Riverside', 'Talomo River', 'Dacudao', 'Lacson', 'Lamanan', 'Inayangan', 'Megkawayan', 'Wangan', 'Cawayan', 'Subasta', 'Sirib', 'Joaquin'),
            array('Tambobong', 'Tawan-Tawan', 'Carmen', 'Gumalang', 'Baguio Proper', 'Malagos', 'Wines', 'Cadalian'),
            array('Gumitan', 'Magsaysay', 'Datu Salumay', 'Bantol', 'Marilog', 'Tamugan', 'Malamba', 'Suawan', 'Salaysay', 'Dalag', 'Baganihan', 'Buda'),
            array('Acacia', 'Tigatto', 'Indangan', 'Callawa', 'Waan', 'Mandug'),
            array('76-A', '75-A', ' 74-A'),
            array('Baliok', 'Bago Gallera', ' Dumoy', 'Bago Aplaya', 'Catalunan Pequeno'),
        ];

        $municipalities = [
            'Malita',
            'Digos',
            'Tagum',
            'Nabunturan',
            'Mati',
        ];

        DB::table('barangays')->truncate();

        foreach ($municipalities as $key => $b)
        {
            Barangay::factory()->create([
                'station_id' => $key + 1,
                'name' => trim($b)
            ]);
        }
    }
}
