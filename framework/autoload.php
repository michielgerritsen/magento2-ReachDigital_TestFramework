<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
require_once __DIR__ . '/../../integration/framework/autoload.php';
require_once __DIR__ . '/../../../../app/autoload.php';

$testsBaseDir = dirname(__DIR__);
$autoloadWrapper = \Magento\Framework\Autoload\AutoloaderRegistry::getAutoloader();

$autoloadWrapper->addPsr4('ReachDigital\\TestFramework\\', "{$testsBaseDir}/framework/ReachDigital/TestFramework/");
