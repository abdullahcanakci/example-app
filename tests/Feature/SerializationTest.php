<?php

namespace Tests\Feature;

use App\Workflows\PrivateWorkflow;
use App\Workflows\PublicWorkflow;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class SerializationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_correct_serialization_for_private_field()
    {
        $workflow = PrivateWorkflow::start();

        $workflowJob = DB::table('workflow_jobs')
            ->where('workflow_id', $workflow->id)
            ->select('*')
            ->first();

        $this->assertTrue('O:19:"App\Jobs\PrivateJob":4:{s:29:"' !== $workflowJob->job, 'Workflow job is serialized wrong');
    }

    public function test_correct_serialization_for_public_field()
    {
        $workflow = PublicWorkflow::start();

        $workflowJob = DB::table('workflow_jobs')
            ->where('workflow_id', $workflow->id)
            ->select('*')
            ->first();

        $this->assertTrue('O:19:"App\Jobs\PrivateJob":4:{s:29:"' !== $workflowJob->job, 'Workflow job is serialized wrong');
    }
}
