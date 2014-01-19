<?php

/**
 * Description of Stack
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Stack {

    private $splstack;

    function __construct(\SplStack $splstack)
    {
        $this->splstack = $splstack;
    }

    public function calculateSomme()
    {

        if ($this->splstack->count() > 1){
            $val1 = $this->splstack->pop();
            $val2 = $this->splstack->pop();
            $val = $val1 + $val2;
            $this->splstack->push($val);
            $this->calculateSomme();
        }
    }

    /**
     * 
     * @return integer
     */
    public function displaySomme()
    {
        $result = $this->splstack->pop();
        return $result;
    }

}

$splstack = new \SplStack();

$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);

$stack = new Stack($splstack);
$stack->calculateSomme();
die(var_dump($stack->displaySomme())); // 150
?>

