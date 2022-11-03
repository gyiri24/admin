<?php

namespace App\Http\Services;
use  App\Models\History;
use  App\Models\Service;


class EmployeeService
{
    public function getEmployeeWorkingHoursByDate($date)
    {
        $historiesByFilter = History::where('created_at', 'like',  '%' . $date . '%')->get();

        $personalTraining = 0;
        $gymnastics = 0;
        $treatment = 0;
        $massage = 0;

        foreach($historiesByFilter as $history){

            switch($history->service->slug)
            {
                case Service::FULL_PERSONAL_TRAINING :
                    $personalTraining += $history->service->duration;
                    break;
                case Service::HALF_PERSONAL_TRAINING :
                    $personalTraining += $history->service->duration;
                    break;
                case Service::FULL_MEDICAL_GYMNASTICS :
                    $gymnastics += $history->service->duration;
                    break;
                case Service::HALF_MEDICAL_GYMNASTICS :
                    $gymnastics += $history->service->duration;
                    break;
                case Service::ULTRASOUND_TREATMENT :
                    $treatment += $history->service->duration;
                    break;
                case Service::TENS_TREATMENT || Service::INTERFERENCE_TREATMENT :
                    $treatment += $history->service->duration;
                    break;
                case Service::INTERFERENCE_TREATMENT :
                    $treatment += $history->service->duration;
                    break;
                case Service::FULL_THERAPEUTIC_MASSAGE :
                    $massage += $history->service->duration;
                    break;
                case Service::HALF_THERAPEUTIC_MASSAGE :
                    $massage += $history->service->duration;
                    break;
                case Service::HALF_SPORT_MASSAGE :
                    $massage += $history->service->duration;
                    break;
                case Service::FULL_SPORT_MAASSAGE :
                    $massage += $history->service->duration;
                    break;
            }
        }

        return [
            'personalTraining' => $personalTraining,
            'gymnastics' => $gymnastics,
            'treatment' => $treatment,
            'massage' => $massage
        ];
    }
}
