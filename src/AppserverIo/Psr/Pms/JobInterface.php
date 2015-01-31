<?php

/**
 * AppserverIo\Psr\Pms\JobInterface
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
 * Interface for a MQ job implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/messaging
 * @link      http://www.appserver.io
 */
interface JobInterface
{

    /**
     * Returns the application instance.
     *
     * @return \AppserverIo\Psr\Application\ApplicationInterface The application instance
     */
    public function getApplication();

    /**
     * Returns the message instance the job is bound to.
     *
     * @return \AppserverIo\Psr\Pms\MessageInterface The message instance
     */
    public function getMessage();

    /**
     * Queries whether the job has been finished or not.
     *
     * @return boolean TRUE if the job has been finished, else FALSE
     */
    public function isFinished();
}
