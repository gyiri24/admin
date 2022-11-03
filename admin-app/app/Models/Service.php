<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    //Gál Bence
    public const FULL_PERSONAL_TRAINING = 'fullPersonalTraining';
    public const HALF_PERSONAL_TRAINING = 'halfPersonalTraining';

    //Kiss Zsófia
    public const FULL_MEDICAL_GYMNASTICS = 'fullMedicalGymnastics';
    public const HALF_MEDICAL_GYMNASTICS = 'halfMedicalGymnastics';

    //Müller Júlia
    public const ULTRASOUND_TREATMENT = 'ultrasoundTreatment';
    public const TENS_TREATMENT = 'tensTreatment';
    public const INTERFERENCE_TREATMENT = 'interferenceTreatment';

    //Vanda Tímea
    public const FULL_THERAPEUTIC_MASSAGE = 'fullTherapeuticMassage';
    public const HALF_THERAPEUTIC_MASSAGE = 'halfTherapeuticMassage';
    public const HALF_SPORT_MASSAGE = 'halfSportMassage';
    public const FULL_SPORT_MAASSAGE = 'fullSportMassage';

    public const SERVICES = [
        self::FULL_PERSONAL_TRAINING,
        self::HALF_PERSONAL_TRAINING,
        self::FULL_MEDICAL_GYMNASTICS,
        self::HALF_MEDICAL_GYMNASTICS,
        self::ULTRASOUND_TREATMENT,
        self::TENS_TREATMENT,
        self::INTERFERENCE_TREATMENT,
        self::FULL_THERAPEUTIC_MASSAGE,
        self::HALF_THERAPEUTIC_MASSAGE,
        self::HALF_SPORT_MASSAGE,
        self::FULL_SPORT_MAASSAGE
    ];

    public const PERSONAL_TRAINING = [
        self::FULL_PERSONAL_TRAINING,
        self::HALF_PERSONAL_TRAINING
    ];

    public const GYMNASTICS = [
        self::FULL_MEDICAL_GYMNASTICS,
        self::HALF_MEDICAL_GYMNASTICS
    ];

    public const TREATMENT = [
        self::ULTRASOUND_TREATMENT,
        self::TENS_TREATMENT,
        self::INTERFERENCE_TREATMENT,
    ];

    public const MASSAGE = [
        self::FULL_THERAPEUTIC_MASSAGE,
        self::HALF_THERAPEUTIC_MASSAGE,
        self::HALF_SPORT_MASSAGE,
        self::FULL_SPORT_MAASSAGE
    ];

    protected $fillable = [
        'user_name',
        'price',
        'qr_code',
        'service_name',
        'duration',
        'slug'
    ];

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
