<?php

/**
 * Description of Task
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace OOPWithSPL\Queue;

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
?>

