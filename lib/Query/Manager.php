<?php
/**
 * Copyright (c) 2016 Robin Appelman <robin@icewind.nl>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

namespace OCA\DB_Slow\Query;

class Manager {
	private $delay;

	public function __construct($delay) {
		$this->delay = $delay;
	}

	public function registerQueryDelay() {
		/** @var \OC\DB\Connection $connection */
		$connection = \OC::$server->getDatabaseConnection();
		$originalLogger = \OC::$server->getQueryLogger();
		$connection->getConfiguration()->setSQLLogger(new Logger($originalLogger, $this->delay));
	}
}
