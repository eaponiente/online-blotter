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
        $barangays = [
            array('Brgy. 23-C Mini Forest', 'Brgy. 22-C Piape Quezon Blvd', 'Brgy 21-C Piape Quezon Blvd', 'Brgy. 31-D Trading Blvd', 'Brgy. Agdao Proper', 'Brgy. 13-B, J.P. Laurel Ave.', 'Brgy. 14-B Lapu-lapu St.', 'Brgy. 15-B Sobrecarey St. Bo. Obrero', 'Brgy. 16-B 33 Lupo Diaz St., Bo. Obrero', 'Brgy. 17-B Nidea/PorrasSts. Bo. Obrero', 'Brgy. 18-B IñigoPorras St., Bo. Obrero', 'Brgy. 20-B Porras Veloso St., Bo. Obrero', 'Brgy. 24-C Cor. Guerero/Aurora Sts.', 'Brgy. 25-C Quezon Blvd', 'Brgy. 26-C Juan Luna St.', 'Brgy. 27-C 3rd Ave Leon Garcia St.', 'Brgy. 28-C Cor Juan Luna/Pioneer Sts', 'Brgy. 29-C Cor Juan Luna/Jacinto', 'Brgy. 30-C Villa Abrille St.', 'Brgy. 32-D Jacinto St.', 'Brgy. 33-D Bonifacio', 'Brgy. 36-D Mabini Quezon Blvd', 'Brgy. 37-D Trading Blvd', 'Brgy. Centro San Juan Vill. R. Castillo', 'Brgy. Leon Garcia', 'Brgy. Lapu-lapu, Maya-Maya Jerome', 'Brgy. Paciano Bangoy/Cory Village Dacudao Ave.', 'Brgy. Ubalde-Ubalde St., R. Castillo', 'Brgy. Rafael Castillo – Executive Homes, Lanang', 'Brgy. San Antonio – NHA Saint Anthony Vill, Agdao', 'Brgy. Tomas Monteverde', 'Brgy. Vicente Duterte', 'Brgy. Wilfredo Aquino', 'Brgy. 30-D Villa Abrille St.'),
            array('Brgy. 1-A Bolton St.', 'Brgy 2-A Magallanes Riverside', 'Brgy. 3-A-E.Quirino Ave', 'Brgy. 4-A-Camus cor. Quirino', 'Brgy.5-A DatuBago Ext, Bankerohan', 'Brgy 6-A San Pedro Ext.', 'Brgy 7-A-Mt. Apo St.', 'Brgy 8-A Fr. Selga St.', 'Brgy 9-A-Camus Ext.', 'Brgy.10-A-Tiongco Ave', 'Brgy 11-B-V.Mapa St.', 'Brgy 12-B-V.Mapa St.', 'Brgy 19-B-Garcia Heights, Bajada', 'Brgy. 34-D-CM Recto', 'Brgy 35-D-Simeon De Jesus St., Rizal Ext', 'Brgy 37-D-Purok, Trading', 'Brgy 38-D Rizal Ext.', 'Brgy. 39-D Quimpo Blvd', 'Brgy 40-D-Bolton Ext.', 'Brgy 76-B SeaWall'),
            array('Brgy Ma-a', 'BrgyMagtuod', 'Brgy. Langub', 'Brgy. Talomo', 'Brgy. Matina Pangi', 'Brgy. Catalunan Grande'),
            array('Brgy. Panacan – Panacan', 'Brgy. Sasa – Sasa', 'Brgy. Pampanga – Sasa', 'Brgy. Hizon – Sasa', 'Brgy. Angliongto – Mamay Road, Lanang'),
            array('Brgy. Buhangin', 'Brgy. Cabantian', 'Brgy. Communal'),
            array('Brgy. Bunawan', 'Brgy Gatungan', 'Brgy. Mahayag', 'Brgy. Mudiang', 'Brgy. Lasang', 'Brgy. San Isidro', 'Brgy. Ilang', 'Brgy. Tibungco'),
            array('Brgy. Malabog', 'Brgy. Colasas', 'Brgy. Mapula', 'Brgy. Pañalum', 'Brgy. Mabuhay', 'Brgy. Sumimao', 'Brgy. Fatima', 'Brgy. Paquibato Proper', 'Brgy. Paradise Embac', 'Brgy. Lumiad', 'Brgy. Pandaitan', 'Brgy. Tapak', 'Brgy. Salapawan'),
            array('Brgy. Daliaon Plantation', 'Brgy. Kilate', 'Brgy. Tungkalan', 'Brgy. Sibulan', 'Brgy. Atan Owe', 'Brgy. Bankas Heights', 'Brgy. Baracatan', 'Brgy. Bato', 'Brgy. Bayabas', 'Brgy. Camansi', 'BrgyCatigan', 'Brgy. Eden', 'Brgy. Crossing Bayabas', 'Brgy. Toril Poblacion', 'Brgy. Tibuloy', 'Brgy. Tagurano', 'Brgy. Sirawan', 'Brgy. Tagluno', 'Brgy. Sibulan', 'Brgy. Mulig', 'Brgy. Marapangi', 'Brgy. Lubogan', 'Brgy. Lizada', 'Brgy. Daliao', 'Brgy. Catigan'),
            array('Brgy. New Carmen', 'Brgy. Biao Eskuela', 'Brgy. Tacunan', 'Brgy. Talandang', 'Brgy. New Valencia', 'Brgy. Guianga', 'Brgy. Tugbok Proper', 'Brgy. Mintal', 'Brgy. BagoOshiro', 'Brgy. Los Amigos', 'Brgy. Angalan', 'Brgy. Manambulan', 'Brgy Ola', 'BrgyTagakpan', 'Brgy Matina Biao'),
            array('Brgy Dominga', 'Brgy Dalagdag', 'Brgy Tamayong', 'Brgy Pangyan', 'Brgy Saloy', 'Brgy Lampiano', 'Brgy CalinanPoblacion', 'Brgy Riverside', 'Brgy Talomo River', 'Brgy. Dacudao', 'Brgy. Lacson', 'Brgy. Lamanan', 'Brgy. Inayangan', 'Brgy. Megkawayan', 'Brgy. Wangan', 'Brgy. Cawayan', 'Brgy. Subasta', 'Brgy.Sirib', 'Brgy. Joaquin'),
            array('Brgy Tambobong', 'Brgy Tawan-Tawan', 'Brgy Carmen', 'Brgy Gumalang', 'Brgy Baguio Proper', 'Brgy Malagos', 'Brgy. Wines', 'Brgy Cadalian'),
            array('Brgy. Gumitan', 'Brgy Magsaysay', 'Brgy DatuSalumay', 'Brgy Bantol', 'Brgy Marilog', 'Brgy Tamugan', 'Brgy Malamba', 'Brgy Suawan', 'Brgy Salaysay', 'Brgy Dalag', 'Brgy Baganihan', 'Brgy Buda'),
            array('Brgy. Acacia', 'Brgy Tigatto', 'Brgy Indangan', 'Brgy Callawa', 'Brgy Waan', 'Brgy Mandug'),
            array('Brgy. 76-A', 'Brgy 75-A', 'Brgy  74-A'),
            array('Brgy. Baliok', 'Brgy Bago Gallera', 'Brgy  Dumoy', 'Brgy Bago Aplaya', 'Catalunan Pequeno'),
        ];

        DB::table('barangays')->truncate();

        foreach ($barangays as $key => $b)
        {
            foreach ($b as $barangay) {
                Barangay::factory()->create([
                    'station_id' => $key + 1,
                    'name' => $barangay
                ]);
            }

        }
    }
}
