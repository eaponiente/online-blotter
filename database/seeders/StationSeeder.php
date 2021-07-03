<?php

namespace Database\Seeders;

use App\Models\Station;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stations = [
            [
                'name' => 'MALITA MUNICIPAL POLICE STATION',
                'commander_name' => 'PLTCOL DEQUINCIO PANTE'
            ],
            [
                'name' => 'DIGOS CITY POLICE STATION',
                'commander_name' => 'PLTCOL VICI ANTHONY T TABABA'
            ],
            [
                'name' => 'TAGUM CITY POLICE STATION',
                'commander_name' => 'PMAJ JOSELITO L TAN'
            ],
            [
                'name' => 'NABUNTURAN MUNICIPAL POLICE STATION',
                'commander_name' => 'PMAJ BIENVENIDO A CUISON JR'
            ],
            [
                'name' => 'MATI CITY POLICE STATION',
                'commander_name' => 'PLTCOL BEMBO L AYING'
            ],
        ];

        DB::table('stations')->truncate();

        foreach ($stations as $station)
        {
            Station::factory()->create($station);
        }
    }

    private function stations()
    {
        return [
            [
                'name' => "STA ANA Police Station (PS1)",
                'commander_name' => 'PMAJ BENKALIN A BALUAN'
            ],
            [
                'name' => "San Pedro Police Station (PS2)",
                'commander_name' => 'PMAJ JACK L TILCAG'
            ],
            [
                'name' => "Talomo Police Station (PS3)",
                'commander_name' => 'PMAJ SEAN C LOGRONIO'
            ],
            [
                'name' => "Sasa Police Station (PS4)",
                'commander_name' => "PMAJ MILAN V NAZ"
            ],
            [
                'name' => "Buhangin Police Station (PS5)",
                'commander_name' => "PMAJ BERNIE SUAGA"
            ],
            [
                'name' => "Bunawan Police Station (PS6)",
                'commander_name' => "PMAJ NOEL B VILLAHERMOSA"
            ],
            [
                'name' => "Paquibato Police Station (PS7)",
                'commander_name' => "PMAJ  MARVIN C HUGOS"
            ],
            [
                'name' => "Toril Police Station (PS8)",
                'commander_name' => 'PMAJ MICHAEL S UYANGUREN'
            ],
            [
                'name' => "Tugbok Police Station (PS9)",
                'commander_name' => 'PMAJ RICKY A OBENZA'
            ],
            [
                'name' => "Calinan Police Station (PS10)",
                'commander_name' => 'PMAJ JAKE C GOLES'
            ],
            [
                'name' => "Baguio Police Station (PS11)",
                'commander_name' => 'PMAJ ARCHILLES C BARGIO'
            ],
            [
                'name' => "Marilog Police Station (PS12)",
                'commander_name' => 'PCPT PHILIP DAVE A UDDIN'
            ],
            [
                'name' => "Mandug Police Station (PS13)",
                'commander_name' => 'PMAJ JEROME A DE GUZMAN'
            ],
            [
                'name' => "Ecoland Police Station (PS15)",
                'commander_name' => 'PMAJ CAROL U JABAGAT'
            ],
            [
                'name' => "Baliok Police Station (PS17)",
                'commander_name' => 'PMAJ JOENEL S PEDERIO'
            ]
        ];
    }
}
