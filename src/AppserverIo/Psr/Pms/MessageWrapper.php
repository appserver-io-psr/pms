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
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/pms
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\Pms;

/**
 * A simple message wrapper instance.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/pms
 * @link      http://www.appserver.io
 */
class MessageWrapper implements MessageInterface
{

    /**
     * The message we want to wrap.
     *
     * @var \AppserverIo\Psr\Pms\MessageInterface
     */
    protected $message;

    /**
     * Injects the message we want to wrap.
     *
     * @param \AppserverIo\Psr\Pms\MessageInterface $message The message instance
     *
     * @return void
     */
    public function injectMessage(MessageInterface $message)
    {
        $this->message = $message;
    }

    /**
     * Returns the injected message instance.
     *
     * @return \AppserverIo\Psr\Pms\MessageInterface The injected message instance
     */
    public function getInjectedMessage()
    {
        return $this->message;
    }

    /**
     * Returns the destination queue.
     *
     * @return \AppserverIo\Psr\Pms\QueueInterface The destination queue
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
     * @return \AppserverIo\Psr\Pms\MessageInterface The parent message
     */
    public function getParentMessage()
    {
        return $this->getInjectedMessage()->getParentMessage();
    }

    /**
     * Returns the message monitor.
     *
     * @return \AppserverIo\Psr\Pms\MonitorInterface The monitor
     */
    public function getMessageMonitor()
    {
        return $this->getInjectedMessage()->getMessageMonitor();
    }

    /**
     * Returns the priority of the message.
     *
     * @return \AppserverIo\Psr\Pms\PriorityKeyInterface The priority of the message
     */
    public function getPriority()
    {
        return $this->getInjectedMessage()->getPriority();
    }

    /**
     * Returns the state of the message.
     *
     * @return \AppserverIo\Psr\Pms\StateKeyInterface The message state
     */
    public function getState()
    {
        return $this->getInjectedMessage()->getState();
    }

    /**
     * Sets the monitor for monitoring the message itself.
     *
     * @param \AppserverIo\Psr\Pms\MonitorInterface $messageMonitor The monitor
     *
     * @return void
     */
    public function setMessageMonitor(MonitorInterface $messageMonitor)
    {
        $this->getInjectedMessage()->setMessageMonitor($messageMonitor);
    }

    /**
     * Unlocks the message.
     *
     * @return void
     */
    public function unlock()
    {
        $this->getInjectedMessage()->unlock();
    }

    /**
     * Sets the parent message.
     *
     * @param \AppserverIo\Psr\Pms\MessageInterface $parentMessage The parent message
     *
     * @return void
     */
    public function setParentMessage(MessageInterface $parentMessage)
    {
        $this->getInjectedMessage()->setParentMessage($parentMessage);
    }

    /**
     * Sets the destination queue.
     *
     * @param \AppserverIo\Psr\Pms\QueueInterface $destination The destination queue
     *
     * @return void
     */
    public function setDestination(QueueInterface $destination)
    {
        $this->getInjectedMessage()->setDestination($destination);
    }

    /**
     * Return's the number of retries for this message.
     *
     * @return integer The number of retries
     */
    public function getRetryCounter()
    {
        return $this->getInjectedMessage()->getRetryCounter();
    }

    /**
     * Return's the callback information for the given state.
     *
     * @param \AppserverIo\Psr\Pms\StateKeyInterface $state The state to register the callback for
     *
     * @return array The array with the callback information
     */
    public function getCallbacks(StateKeyInterface $state)
    {
        return $this->getInjectedMessage()->getCallbacks($state);
    }

    /**
     * Add's the callback for the given state.
     *
     * @param \AppserverIo\Psr\Pms\StateKeyInterface $state    The state to register the callback for
     * @param array                                  $callback The array with the bean's lookup and method name that has to be invoked
     *
     * @return void
     * @throws \Exception Is thrown if the passed state doesn't support callbacks
     */
    public function addCallback(StateKeyInterface $state, array $callback)
    {
        $this->getInjectedMessage()->addCallback($state, $callback);
    }

    /**
     * Return's the timeout for the given retry.
     *
     * @param integer $retry The retry to return the timeout for
     *
     * @return integer The timeout in seconds for the passed retry
     * @throws \InvalidArgumentException Is thrown if the timeout for the passed retry is NOT available
     */
    public function getRetryTimeout($retry)
    {
        return $this->getInjectedMessage()->getRetryTimeout($retry);
    }

    /**
     * Return's the array with the retry timeouts.
     *
     * @return array The retry timeouts
     */
    public function getRetryTimeouts()
    {
        return $this->getInjectedMessage()->getRetryTimeouts();
    }

    /**
     * Returns the message lock flag.
     *
     * @return boolean TRUE if the message is locked, else FALSE
     */
    public function isLocked()
    {
        return $this->getInjectedMessage()->isLocked();
    }

    /**
     * Sets the state of the message.
     *
     * @param \AppserverIo\Psr\Pms\StateKeyInterface $state The new state
     *
     * @return void
     */
    public function setState(StateKeyInterface $state)
    {
        $this->getInjectedMessage()->setState($state);
    }

    /**
     * Locks the message.
     *
     * @return void
     */
    public function lock()
    {
        $this->getInjectedMessage()->lock();
    }

    /**
     * Sets the priority of the message.
     *
     * @param \AppserverIo\Psr\Pms\PriorityKeyInterface $priority The priority to set the message to
     *
     * @return void
     */
    public function setPriority(PriorityKeyInterface $priority)
    {
        $this->getInjectedMessage()->setPriority($priority);
    }

    /**
     * Return's whether or not callbacks for the passed state has been registered.
     *
     * @param \AppserverIo\Psr\Pms\StateKeyInterface $state The state to register the callback for
     *
     * @return boolean TRUE if callbacks has been registered, else FALSE
     */
    public function hasCallbacks(StateKeyInterface $state)
    {
        return $this->getInjectedMessage()->hasCallbacks($state);
    }

    /**
     * Set's the array with the retry timeouts which is also responsible
     * for the the number of retries.
     *
     * @param array $retryTimeouts The number of retries with their timeouts
     *
     * @return void
     */
    public function setRetryTimeouts(array $retryTimeouts)
    {
        $this->getInjectedMessage()->setRetryTimeouts($retryTimeouts);
    }
}
