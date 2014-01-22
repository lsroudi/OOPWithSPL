<?php

/**
 * Description of Queue
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
        return $tasktoexecute->getName() . ' executed';
    }

}

?>
