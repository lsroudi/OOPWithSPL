<?php

/**
 * Description of Queue
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use \SplQueue;

class Queue extends SplQueue {

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
        print $tasktoexecute->getName(). ' executed';
    }

}

class Task {

    private $name;

    public function __construct($str)
    {
        $this->name = strtolower($str);
    }

    public function getName()
    {
        return $this->name;
    }

}

// task to add in queue

$task1 = new Task('Task 1');
$task2 = new Task('Task 2');
$task3 = new Task('Task 3');

$queue = new Queue();
$queue->add(array($task1,$task2,$task3));

$queue->execute(); //task 1 executed 
$queue->execute(); //task 2 executed
$queue->execute(); //task 3 executed


?>
