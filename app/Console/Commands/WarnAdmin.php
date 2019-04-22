<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\ProcessingRq;
use App\Mail\WarningMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class WarnAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'warn:admin';

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
        $requests = ProcessingRq::query()->where('status', 'Aktivan')->get();

        foreach ($requests as $request) {
            if (Carbon::parse($request->drop_off_date)->lessThanOrEqualTo(today())) {
                Mail::to("receiver@example.com")->send(new WarningMail($request));
            }
        }
    }
}
