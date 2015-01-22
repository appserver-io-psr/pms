<?php

/**
 * AppserverIo\Psr\Pms\MessageWrapper
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
 * A simple message wrapper instance.
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
class MessageWrapper implements Message
{

    /**
     * The message we want to wrap.
     *
     * @var AppserverIo\Psr\Pms\Message
     */
    protected $message;

    /**
     * Injects the message we want to wrap.
     *
     * @param AppserverIo\Psr\Pms\Message $message
     */
    public function injectMessage(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Returns the injected message instance.
     *
     * @return AppserverIo\Psr\Pms\Message The injected message instance
     */
    public function getInjectedMessage()
    {
        return $this->message;
    }

    /**
     * Returns the destination queue.
     *
     * @return \AppserverIo\Psr\Pms\Queue The destination queue
     */
    public function getDestination()
    {
        return $this->getInjectedMessage()->getDestination();
    }

    /**
    * Returns the message id as an
    * hash value..
    *
    * @return string The message id as hash value
    */
    public function getMessageId()
    {
        return $this->getInjectedMessage()->getMessageId();
    }

    /**
     * Returns the message itself.
     *
     * @return Object The message depending on the type of the Message object
     */
    public function getMessage()
    {
        return $this->getInjectedMessage()->getMessage();
    }

    /**
     * Sets the unique session id.
     *
     * @param string $sessionId The uniquid id
     *
     * @return void
     */
    public function setSessionId($sessionId)
    {
        $this->getInjectedMessage()->setSessionId($sessionId);
    }

    /**
     * Returns the unique session id.
     *
     * @return string The uniquid id
     */
    public function getSessionId()
    {
        return $this->getInjectedMessage()->getSessionId();
    }

    /**
     * Returns the parent message.
     *
     * @return \AppserverIo\Psr\Pms\Message The parent message
     */
    public function getParentMessage()
    {
        return $this->getInjectedMessage()->getParentMessage();
    }

    /**
     * Returns the message monitor.
     *
     * @return \AppserverIo\Psr\Pms\Monitor The monitor
     */
    public function getMessageMonitor()
    {
        return $this->getInjectedMessage()->getMessageMonitor();
    }
}
