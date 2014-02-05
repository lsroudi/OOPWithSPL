<?php

/**
 * Description of PriorityQueue
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
interface PriorityLoggerInterface {

    public function insert($value, $priority);
}

class PriorityLogger extends SplPriorityQueue implements PriorityLoggerInterface {
    
}

class Logger {

    const ERROR = 3;
    const NOTICE = 1;
    const WARNING = 2;

    private $priorityLogger;

    public function __construct(PriorityLoggerInterface $priorityLogger)
    {
        $this->priorityLogger = $priorityLogger;
    }

    public function addMessage($value, $priority)
    {
        $this->priorityLogger->insert($value, $priority);
    }

    public function getPriorityLogger()
    {
        return $this->priorityLogger;
    }

}

$priorityLogger = new PriorityLogger();

$logger = new Logger($priorityLogger);
$logger->addMessage('Message with notice type', Logger::NOTICE);
$logger->addMessage('Message with warning type', Logger::WARNING);
$logger->addMessage('Message with error type', Logger::ERROR);

$priorityLoggerQueue = $logger->getPriorityLogger();

foreach ($priorityLoggerQueue as $queue){
    print $queue . PHP_EOL;
}

//Résultat
//Message with error type
//Message with warning type
//Message with notice type
?>

