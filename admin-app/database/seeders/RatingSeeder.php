<?php

namespace Database\Seeders;

use App\Models\Rating;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $serviceIds = Service::all()->pluck('id')->toArray();
        
        $ratings = [4,5];

        $comments = array(
            "Csak ajánlani tudom! Minden ugy volt ahogy kértem es megbeszéltük", 
            "Folyamatosan önmagukat is fejlesztő, professzionális szakemberek. Kiváló eszközpark, szuper sportkörnyezet! És a legjobb sportolók!", 
            "Profi szakemberek, barátságos környezet!! Minden gyógyulni vágyónak szívből ajánlom!", 
            "Szakertelem, pozitiv hozzaallas, rugalmassag, jol kiepitett infrastruktura (jo emberek, johelyen, jo idoben)",
            "Nagyon meg voltam elégedve a szolgáltatással",
            "Hihetelen szakértelem, remek áron",
            "Csak ajánlani tudom.",
            "Profi szakemberek, és hozzáállás.",
            "Világszínvonal.",
        );

        for ($x = 0; $x <= 100; $x++) {
            $service = array_rand($serviceIds, 1);
            $comment = array_rand($comments, 1);
            $rating  = array_rand($ratings, 1);
            $serviceId = Service::where('id', '=', $service)->first();
            
            Rating::create([
                'service_id' => $serviceId['id'],
                'rating' => $ratings[$rating],
                'comment' => $comments[$comment]
            ]);
          }
        
    }
}
