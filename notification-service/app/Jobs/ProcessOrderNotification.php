<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class ProcessOrderNotification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public $orderData)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::info(serialize($this->orderData));
    }
}
