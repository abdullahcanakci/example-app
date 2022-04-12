<?php

namespace App\Workflows;

use App\Jobs\PublicJob;
use Sassnowski\Venture\Facades\Workflow;
use Sassnowski\Venture\AbstractWorkflow;
use Sassnowski\Venture\WorkflowDefinition;

class PublicWorkflow extends AbstractWorkflow
{

    public function __construct()
    {
    }

    public function definition(): WorkflowDefinition
    {
        return Workflow::define('Public workflow')
            ->addJob(new PublicJob());
    }
}
