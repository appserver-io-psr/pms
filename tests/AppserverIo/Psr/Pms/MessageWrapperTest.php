<?php

/**
 * AppserverIo\Psr\Pms\MessageWrapperTest
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
 * A test implementation for the simple message wrapper instance.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/pms
 * @link      http://www.appserver.io
 */
class MessageWrapperTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The message wrapper instance we want to test.
     *
     * @var \AppserverIo\Psr\Pms\MessageWrapper
     */
    protected $messageWrapper;

    /**
     * Initializes the message wrapper instance we want to test.
     *
     * @return void
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    protected function setUp()
    {
        $this->messageWrapper = new MessageWrapper();
    }

    /**
     * Test the getMessage() method.
     *
     * @return void
     */
    public function testGetMessage()
    {

        // create a mock message instance and mock all methods
        $mockMessage = $this->getMockBuilder('AppserverIo\Psr\Pms\MessageInterface')
                            ->setMethods(get_class_methods('AppserverIo\Psr\Pms\MessageInterface'))
                            ->getMock();

        // mock the getMessage() method
        $mockMessage->expects($this->once())
            ->method('getMessage')
            ->will($this->returnValue($value = 'test'));

        // inject the message
        $this->messageWrapper->injectMessage($mockMessage);

        // check the return value
        $this->assertSame($value, $this->messageWrapper->getMessage());
    }
}
