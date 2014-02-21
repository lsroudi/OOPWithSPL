<?php

/**
 * Description of Logger
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OOPSPL\Priority;

use OOPSPL\Priority\PriorityLoggerInterface;

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

    /**
     * 
     * @return OOPWithSPL\Priority\PriorityLoggerInterface
     */
    public function getPriorityLogger()
    {
        return $this->priorityLogger;
    }

}
?>

