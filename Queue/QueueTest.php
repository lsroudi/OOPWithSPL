<?php

/**
 * Description of StackTest
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once 'vendor/autoload.php';

use OOPWithSPL\Queue\Queue;
use OOPWithSPL\Queue\Task;

class QueueTest extends PHPUnit_Framework_TestCase {
    
    public function testExecute()
    {        
        $task1 = new Task('Task 1');
        $task2 = new Task('Task 2');
        $task3 = new Task('Task 3');

        $queue = new Queue();
        $queue->add(array($task1, $task2, $task3));

        $resutlt = $queue->execute();


        $this->assertEquals('task 1 executed', $resutlt);
        
        $this->assertEquals(2, $queue->count());
        
        
    }

}

?>
