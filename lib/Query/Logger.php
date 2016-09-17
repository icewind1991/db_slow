<?php
/**
 * Copyright (c) 2016 Robin Appelman <robin@icewind.nl>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

namespace OCA\DB_Slow\Query;

use Doctrine\DBAL\Logging\SQLLogger;
use OCP\Diagnostics\IQueryLogger;

class Logger implements SQLLogger {
	private $originalLogger;
	private $delay;

	public function __construct(IQueryLogger $originalLogger, $delay) {
		$this->originalLogger = $originalLogger;
		$this->delay = $delay;
	}

	public function startQuery($sql, array $params = null, array $types = null) {
		usleep($this->delay * 1000);
		$this->originalLogger->startQuery($sql, $params, $types);
	}

	public function stopQuery() {
		$this->originalLogger->stopQuery();
	}
}
