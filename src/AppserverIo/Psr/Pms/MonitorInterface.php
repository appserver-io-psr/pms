<?php

/**
 * AppserverIo\Psr\Pms\MonitorInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/pms
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\Pms;

/**
 * Interface for all message monitors.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/pms
 * @link      http://www.appserver.io
 */
interface MonitorInterface
{

    /**
     * Returns the log message.
     *
     * @return string The log message
     */
    public function getLogMessage();

    /**
     * Returns the row counter.
     *
     * @return integer The row counter
     */
    public function getRowCount();

    /**
     * Returns the target counter.
     *
     * @return integer The target counter
     */
    public function getTarget();
}
