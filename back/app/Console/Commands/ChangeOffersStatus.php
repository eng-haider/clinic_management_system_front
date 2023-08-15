<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use App\Http\Controllers\API\OfferController;

class ChangeOffersStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    
   protected $signature = 'offers:vaild';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $offer=new OfferController;
      $offer->ChangeOffersStatus();
    }
}
