<?php
/**
 * Copyright (c) 2016 Robin Appelman <robin@icewind.nl>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

$manager = new \OCA\DB_Slow\Query\Manager(10);

$manager->registerQueryDelay();

