<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personalTrainer = User::where('user_name', '=', User::GAL_BENCE)->first();
        $treatment = User::where('user_name', '=', User::KISS_ZSOFIA)->first();
        $personalMasseur = User::where('user_name', '=', User::MULLER_JULIA)->first();
        $physicalTherapist = User::where('user_name', '=', User::VANDA_TIMEA)->first();


        Service::updateOrCreate(
            [
                'slug' => 'halfPersonalTraining',
            ],
            [
                'user_name' => 'Gál Bence',
                'price' => 6000,
                'service_name' => 'Személyi edzés',
                'qr_code' => 'example',
                'duration' => 30,
                'slug' => 'halfPersonalTraining',
                'user_id' => $personalTrainer['id'],
            ]
        );

        Service::updateOrCreate(
            [
                'slug' => 'fullPersonalTraining',
            ],
            [
                'user_name' => 'Gál Bence',
                'price' => 10000,
                'service_name' => 'Személyi edzés',
                'qr_code' => 'example',
                'duration' => 60,
                'slug' => 30,
                'slug' => 'fullPersonalTraining',
                'user_id' => $personalTrainer['id'],
            ]
        );

        Service::updateOrCreate(
            [
                'slug' => 'tensTreatment',
            ],
            [
                'user_name' => 'Müller Júlia',
                'price' => 8000,
                'service_name' => 'Tens kezelés',
                'qr_code' => 'example',
                'duration' => 15,
                'slug' => 'tensTreatment',
                'user_id' => $treatment['id'],
            ]
        );

        Service::updateOrCreate(
            [
                'slug' => 'interferenceTreatment',
            ],
            [
                'user_name' => 'Müller Júlia',
                'price' => 8000,
                'service_name' => 'Interferencia kezelés',
                'qr_code' => 'example',
                'duration' => 20,
                'slug' => 'interferenceTreatment',
                'user_id' => $treatment['id'],
            ]
        );

        Service::updateOrCreate(
            [
                'slug' => 'ultrasoundTreatment',
            ],
            [
                'user_name' => 'Müller Júlia',
                'price' => 8000,
                'service_name' => 'Ultrahang kezelés',
                'qr_code' => 'example',
                'duration' => 10,
                'slug' => 'ultrasoundTreatment',
                'user_id' => $treatment['id'],
            ]
        );

        Service::updateOrCreate(
            [
                'slug' => 'halfSportMassage',
            ],
            [
                'user_name' => 'Vanda Tímea',
                'price' => 4500,
                'service_name' => 'Sportmasszás',
                'qr_code' => 'example',
                'duration' => 30,
                'slug' => 'halfSportMassage',
                'user_id' => $personalMasseur['id'],
            ]
        );

        Service::updateOrCreate(
            [
                'slug' => 'fullSportMassage',
            ],
            [
                'user_name' => 'Vanda Tímea',
                'price' => 7000,
                'service_name' => 'Sportmasszás',
                'qr_code' => 'example',
                'duration' => 60,
                'slug' => 'fullSportMassage',
                'user_id' => $personalMasseur['id'],
            ]
        );

        Service::updateOrCreate(
            [
                'slug' => 'halfTherapeuticMassage',
            ],
            [
                'user_name' => 'Vanda Tímea',
                'price' => 4500,
                'service_name' => 'Gyógymasszázs',
                'qr_code' => 'example',
                'duration' => 30,
                'slug' => 'halfTherapeuticMassage',
                'user_id' => $personalMasseur['id'],
            ]
        );

        Service::updateOrCreate(
            [
                'slug' => 'fullTherapeuticMassage',
            ],
            [
                'user_name' => 'Vanda Tímea',
                'price' => 9000,
                'service_name' => 'Gyógymasszázs',
                'qr_code' => 'example',
                'duration' => 60,
                'slug' => 'fullTherapeuticMassage',
                'user_id' => $personalMasseur['id'],
            ]
        );

        Service::updateOrCreate(
            [
                'slug' => 'halfMedicalGymnastics',
            ],
            [
                'user_name' => 'Kiss Zsófia',
                'price' => 3500,
                'service_name' => 'Gyógytorna',
                'qr_code' => 'example',
                'duration' => 30,
                'slug' => 'halfMedicalGymnastics',
                'user_id' => $physicalTherapist['id'],
            ]
        );

        Service::updateOrCreate(
            [
                'slug' => 'fullMedicalGymnastics',
            ],
            [
                'user_name' => 'Kiss Zsófia',
                'price' => 7000,
                'service_name' => 'Gyógytorna',
                'qr_code' => 'example',
                'duration' => 60,
                'slug' => 'fullMedicalGymnastics',
                'user_id' => $physicalTherapist['id'],
            ]
        );
    }
}
