<?php

/**
 * Description of PriorityTest
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once 'vendor/autoload.php';

use OOPSPL\Priority\PriorityLogger;
use OOPSPL\Priority\Logger;

class PriorityTest extends PHPUnit_Framework_TestCase {


    public function testPriority()
    {
        $priorityLogger = new PriorityLogger();

        $logger = new Logger($priorityLogger);
        $logger->addMessage('Message with notice type', Logger::NOTICE);
        $logger->addMessage('Message with warning type', Logger::WARNING);
        $logger->addMessage('Message with error type', Logger::ERROR);

        $priorityLoggerQueue = $logger->getPriorityLogger();

        $this->assertEquals('Message with error type', $priorityLoggerQueue->extract());
        $this->assertEquals('Message with warning type', $priorityLoggerQueue->extract());
        $this->assertEquals('Message with notice type', $priorityLoggerQueue->extract());


    }

}
?>

