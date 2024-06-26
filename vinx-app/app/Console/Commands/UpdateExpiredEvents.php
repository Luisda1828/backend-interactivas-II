<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\Event;

class UpdateExpiredEvents extends Command
{
    protected $signature = 'events:update-expired';
    protected $description = 'Update expired status of events';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $now = Carbon::now();
        Log::info('UpdateExpiredEvents command is running at ' . $now);

        $updated = Event::where('eve_datetime', '<', $now)
            ->update(['expired' => true]);

        
        $this->info('Expired events have been updated.');
    }
}
