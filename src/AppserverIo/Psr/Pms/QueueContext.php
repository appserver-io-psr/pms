<?php

/**
 * AppserverIo\Psr\Pms\QueueContext
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
 * The queue context interface for the queue registered for the application.
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
interface QueueContext
{

    /**
     * The unique identifier to be registered in the application context.
     *
     * @var string
     */
    const IDENTIFIER = 'QueueContext';

    /**
     * Returns the array with queue names and the MessageReceiver class
     * names as values.
     *
     * @return array The registered queues
     */
    public function getQueues();

    /**
     * Returns the absolute path to the web application.
     *
     * @return string The absolute path
     */
    public function getWebappPath();

    /**
     * Returns TRUE if the application is related with the
     * passed queue instance.
     *
     * @param \AppserverIo\Psr\Pms\Queue $queue The queue the application has to be related to
     *
     * @return boolean TRUE if the application is related, else FALSE
     */
    public function hasQueue(Queue $queue);

    /**
     * Tries to locate the queue that handles the request and returns the instance
     * if one can be found.
     *
     * @param \AppserverIo\Psr\Pms\Queue $queue The queue request
     *
     * @return \AppserverIo\Psr\Pms\Queue The requested queue instance
     */
    public function locate(Queue $queue);

    /**
     * Updates the message monitor.
     *
     * @param \AppserverIo\Psr\Pms\Message $message The message to update the monitor for
     *
     * @return void
     */
    public function updateMonitor(Message $message);
}
