<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('integration_saoffgs_datas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('timestamp');
            $table->float('BASIN');
            $table->float('MAP01');
            $table->float('MAP03');
            $table->float('MAP06');
            $table->float('MAP24');
            $table->float('GMAP06');
            $table->float('GMAP24');
            $table->float('ASMU06');
            $table->float('ASML06');
            $table->float('ASMT06');
            $table->float('FFG01');
            $table->float('FFG03');
            $table->float('FFG06');
            $table->float('PREVFFG01');
            $table->float('PREVFFG03');
            $table->float('PREVFFG06');
            $table->float('F1MAP01');
            $table->float('F1MAP03');
            $table->float('F1MAP06');
            $table->float('F1MAP24');
            $table->float('F2MAP01');
            $table->float('F2MAP03');
            $table->float('F2MAP06');
            $table->float('F2MAP24');
            $table->float('F3MAP01');
            $table->float('F3MAP03');
            $table->float('F3MAP06');
            $table->float('F3MAP24');
            $table->float('IFFT01');
            $table->float('IFFT03');
            $table->float('IFFT06');
            $table->float('PFFT01');
            $table->float('PFFT03');
            $table->float('PFFT06');
            $table->float('F1FFT01');
            $table->float('F1FFT03');
            $table->float('F1FFT06');
            $table->float('F2FFT01');
            $table->float('F2FFT03');
            $table->float('F2FFT06');
            $table->float('F3FFT01');
            $table->float('F3FFT03');
            $table->float('F3FFT06');
            $table->float('PET06');
            $table->float('F1FFR12');
            $table->float('F1FFR24');
            $table->float('F1FFR36');
            $table->float('F2FFR12');
            $table->float('F2FFR24');
            $table->float('F2FFR36');
            $table->float('F3FFR12');
            $table->float('F3FFR24');
            $table->float('F3FFR36');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
