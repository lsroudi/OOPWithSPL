<?php

/**
 * Description of Queue
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace OOPSPL\Queue;

class Queue extends \SplQueue {

    public function add($tasks)
    {
        foreach ($tasks as $task)
        {
            $this->enqueue($task);
        }
    }

    public function execute()
    {
        $tasktoexecute = $this->dequeue();
        return $tasktoexecute->getName() . ' executed';
    }

}
/**
 * Example 
require_once '../vendor/autoload.php';

use OOPWithSPL\Queue\Task;

$task1 = new Task('Task 1');
$task2 = new Task('Task 2');
$task3 = new Task('Task 3');


$queue = new Queue();
$queue->add(array($task1, $task2, $task3));

echo $queue->execute(); // task 1 executed
echo $queue->execute(); // task 2 executed
echo $queue->execute(); // task 2 executed
 */



?>
