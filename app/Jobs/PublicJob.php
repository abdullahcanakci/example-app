<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Sassnowski\Venture\WorkflowStep;

class PublicJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, WorkflowStep;

    public $property;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->property = 'Public property';
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        info($this->property);
    }
}
