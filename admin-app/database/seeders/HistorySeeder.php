<?php

namespace Database\Seeders;

use App\Models\History;
use App\Models\User;
use App\Models\Role;
use App\Models\Service;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleUserId = Role::where('slug', '=', Role::USER)->first();
        $userIds = User::where('role_id', '=', $roleUserId['id'])->pluck('id')->toArray();
        $serviceIds = Service::pluck('id')->toArray();

        for($x = 0; $x < 2000; $x++) {

            $userId = array_rand($userIds);
            $serviceId = array_rand($serviceIds);

            $user = User::find($userId);
            $service = Service::find($serviceId);

            $int= rand(1546318800,1672527599);
            $date = date("Y-m-d H:i:s", $int);

            History::create([
                'user_id' => $user['id'],
                'service_id' => $service['id'],
                'price' => $service['price'],
                'created_at' => $date,
                'updated_at' => $date
            ]);
        }



    }
}
