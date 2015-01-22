<?php

/**
 * AppserverIo\Psr\Pms\ResourceLocator
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
 * Interface for the resource locator instances.
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
interface ResourceLocator
{

    /**
     * Tries to locate the queue that handles the request and returns the instance
     * if one can be found.
     *
     * @param \AppserverIo\Psr\Pms\QueueContext $queueManager The queue manager instance
     * @param \AppserverIo\Psr\Pms\Queue        $queue        The queue request
     *
     * @return \AppserverIo\Psr\Pms\Queue The requested queue instance
     */
    public function locate(QueueContext $queueManager, Queue $queue);
}
