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
        $fullPersonalTraining = Service::where('slug','=', Service::FULL_PERSONAL_TRAINING)->first();
        $halfPersonalTraining = Service::where('slug','=', Service::HALF_PERSONAL_TRAINING)->first();

        $fullMedicalGymnastics = Service::where('slug','=', Service::FULL_MEDICAL_GYMNASTICS)->first();
        $halfMedicalGymnastics = Service::where('slug','=', Service::HALF_MEDICAL_GYMNASTICS)->first();

        $ultrasoundTreatment = Service::where('slug','=', Service::ULTRASOUND_TREATMENT)->first();
        $tensTreatment = Service::where('slug','=', Service::TENS_TREATMENT)->first();
        $interferenceTreatment = Service::where('slug','=', Service::INTERFERENCE_TREATMENT)->first();

        $fullTherapeuticMassage = Service::where('slug','=', Service::FULL_THERAPEUTIC_MASSAGE)->first();
        $halfTherapeuticMassage = Service::where('slug','=', Service::HALF_THERAPEUTIC_MASSAGE)->first();
        $halfSportMassage = Service::where('slug','=', Service::HALF_SPORT_MASSAGE)->first();
        $fullSportMassage = Service::where('slug','=', Service::FULL_SPORT_MAASSAGE)->first();

        Rating::create([
            'name' => 'Adminisztrátor',
            'slug' => 'admin',
        ]);
    }
}
