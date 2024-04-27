<?php

namespace App\Console\Commands;

use App\Models\Event;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;

class HidePastEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:hide-past-events';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();
        $events = Event::whereDate('end_date', '<', $now)
                       ->orWhere(function ($query) use ($now) {
                           $query->whereDate('end_date', '=', $now)
                                 ->whereTime('end_time', '<=', $now);
                       })->get();

        foreach ($events as $event) {
            // Here, you can decide what to do. For example:
            // $event->delete(); // To delete the event
            // Or mark it as past if you have a 'status' column
            // $event->status = 'past';
            // $event->save();
        }

        $this->info('Past events processed successfully.');
    }
}
