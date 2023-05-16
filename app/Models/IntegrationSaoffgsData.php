<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegrationSaoffgsData extends Model
{
    use HasFactory;

    protected $fillable = [
        'timestamp',
        'BASIN',
        'MAP01',
        'MAP03',
        'MAP06',
        'MAP24',
        'GMAP06',
        'GMAP24',
        'ASMU06',
        'ASML06',
        'ASMT06',
        'FFG01',
        'FFG03',
        'FFG06',
        'PREVFFG01',
        'PREVFFG03',
        'PREVFFG06',
        'F1MAP01',
        'F1MAP03',
        'F1MAP06',
        'F1MAP24',
        'F2MAP01',
        'F2MAP03',
        'F2MAP06',
        'F2MAP24',
        'F3MAP01',
        'F3MAP03',
        'F3MAP06',
        'F3MAP24',
        'IFFT01',
        'IFFT03',
        'IFFT06',
        'PFFT01',
        'PFFT03',
        'PFFT06',
        'F1FFT01',
        'F1FFT03',
        'F1FFT06',
        'F2FFT01',
        'F2FFT03',
        'F2FFT06',
        'F3FFT01',
        'F3FFT03',
        'F3FFT06',
        'PET06',
        'F1FFR12',
        'F1FFR24',
        'F1FFR36',
        'F2FFR12',
        'F2FFR24',
        'F2FFR36',
        'F3FFR12',
        'F3FFR24',
        'F3FFR36'
    ];  

}
