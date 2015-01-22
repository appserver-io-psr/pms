<?php

/**
 * AppserverIo\Psr\Pms\Worker
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Pms
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/pms
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Psr\Pms;

/**
 * The interface for all handlers.
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Pms
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/pms
 * @link       http://www.appserver.io
 */
interface Worker
{

    /**
     * Updates the message monitor.
     *
     * @param \AppserverIo\Psr\Pms\Message $message The message to update the monitor for
     *
     * @return void
     */
    public function updateMonitor(Message $message);
}
