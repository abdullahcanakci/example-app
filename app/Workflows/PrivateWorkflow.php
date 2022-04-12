<?php

namespace App\Workflows;

use App\Jobs\PrivateJob;
use Sassnowski\Venture\Facades\Workflow;
use Sassnowski\Venture\AbstractWorkflow;
use Sassnowski\Venture\WorkflowDefinition;

class PrivateWorkflow extends AbstractWorkflow
{

    public function __construct()
    {
    }

    public function definition(): WorkflowDefinition
    {
        return Workflow::define('Private workflow')
            ->addJob(new PrivateJob());
    }
}
