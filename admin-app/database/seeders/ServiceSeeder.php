<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Service::updateOrCreate(
            [
                'user_name' => 'Gál Bence',
                'duration' => 30,
            ],
            [
                'user_name' => 'Gál Bence',
                'price' => 6000,
                'service_name' => 'Személyi edzés',
                'qr_code' => 'example',
                'duration' => 30,
            ]
        );

        Service::updateOrCreate(
            [
                'user_name' => 'Gál Bence',
                'duration' => 60,
            ],
            [
                'user_name' => 'Gál Bence',
                'price' => 10000,
                'service_name' => 'Személyi edzés',
                'qr_code' => 'example',
                'duration' => 60,
            ]
        );

        Service::updateOrCreate(
            [
                'user_name' => 'Müller Júlia',
                'duration' => 15,
            ],
            [
                'user_name' => 'Müller Júlia',
                'price' => 8000,
                'service_name' => 'Tens kezelés',
                'qr_code' => 'example',
                'duration' => 15,
            ]
        );

        Service::updateOrCreate(
            [
                'user_name' => 'Müller Júlia',
                'duration' => 20,
            ],
            [
                'user_name' => 'Müller Júlia',
                'price' => 8000,
                'service_name' => 'Interferencia kezelés',
                'qr_code' => 'example',
                'duration' => 20,
            ]
        );

        Service::updateOrCreate(
            [
                'user_name' => 'Müller Júlia',
                'duration' => 10,
            ],
            [
                'user_name' => 'Müller Júlia',
                'price' => 8000,
                'service_name' => 'Ultrahang kezelés',
                'qr_code' => 'example',
                'duration' => 10,
            ]
        );

        Service::updateOrCreate(
            [
                'user_name' => 'Vanda Tímea',
                'service_name' => 'Sportmasszás',
                'duration' => 30,
            ],
            [
                'user_name' => 'Vanda Tímea',
                'price' => 4500,
                'service_name' => 'Sportmasszás',
                'qr_code' => 'example',
                'duration' => 30,
            ]
        );

        Service::updateOrCreate(
            [
                'user_name' => 'Vanda Tímea',
                'service_name' => 'Sportmasszás',
                'duration' => 60,
            ],
            [
                'user_name' => 'Vanda Tímea',
                'price' => 7000,
                'service_name' => 'Sportmasszás',
                'qr_code' => 'example',
                'duration' => 60,
            ]
        );

        Service::updateOrCreate(
            [
                'user_name' => 'Vanda Tímea',
                'service_name' => 'Gyógymasszázs',
                'duration' => 30,
            ],
            [
                'user_name' => 'Vanda Tímea',
                'price' => 4500,
                'service_name' => 'Gyógymasszázs',
                'qr_code' => 'example',
                'duration' => 30,
            ]
        );

        Service::updateOrCreate(
            [
                'user_name' => 'Vanda Tímea',
                'service_name' => 'Gyógymasszázs',
                'duration' => 60,
            ],
            [
                'user_name' => 'Vanda Tímea',
                'price' => 9000,
                'service_name' => 'Gyógymasszázs',
                'qr_code' => 'example',
                'duration' => 60,
            ]
        );

        Service::updateOrCreate(
            [
                'user_name' => 'Kiss Zsófia',
                'service_name' => 'Gyógytorna',
                'duration' => 30,
            ],
            [
                'user_name' => 'Kiss Zsófia',
                'price' => 3500,
                'service_name' => 'Gyógytorna',
                'qr_code' => 'example',
                'duration' => 30,
            ]
        );

        Service::updateOrCreate(
            [
                'user_name' => 'Kiss Zsófia',
                'service_name' => 'Gyógytorna',
                'duration' => 60,
            ],
            [
                'user_name' => 'Kiss Zsófia',
                'price' => 7000,
                'service_name' => 'Gyógytorna',
                'qr_code' => 'example',
                'duration' => 60,
            ]
        );
    }
}
