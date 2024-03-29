<?php

namespace App\Jobs;
use App\Models\image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class WatermakLogo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = image::find($this->announcement_image_id);
        if(!$i){
            return;
        }
        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        $image = SpatieImage::load($srcPath);

        $image->watermark('resources/img/Presto_logo_Main.png')
                ->watermarkPosition(Manipulations::POSITION_BOTTOM_RIGHT)
                ->watermarkHeight(20, Manipulations::UNIT_PERCENT)
                ->watermarkWidth(20, Manipulations::UNIT_PERCENT)
                ->watermarkPadding(5, 2, Manipulations::UNIT_PERCENT);
        $image->save($srcPath);
    }
}
