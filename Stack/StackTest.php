<?php

/**
 * Description of StackTest
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require 'Stack.php';

class StackTest extends PHPUnit_Framework_TestCase {

    public function testCalculateSomme() {
        $splstack = new \SplStack();

        $splstack->push(10);
        $splstack->push(10);
        $splstack->push(10);

        $stack = new Stack($splstack);
        
        $stack->calculateSomme();
        $result = $stack->displaySomme();
        
        $this->assertEquals(30, $result);
    }

}

?>
