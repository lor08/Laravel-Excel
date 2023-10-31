<?php

namespace Maatwebsite\Excel\Concerns;

use Illuminate\Contracts\Queue\ShouldQueue;

interface ShouldQueueWithBatch extends ShouldQueue
{
	public function setBatchId(string $id): void;
}
