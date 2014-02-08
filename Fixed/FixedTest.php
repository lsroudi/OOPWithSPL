<?php

/**
 * Description of FixedTest
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require 'vendor/autoload.php';

use OOPWithSPL\Fixed\FixedArray;

class FixedTest extends \PHPUnit_Framework_TestCase {

    public function testFixedArray()
    {
        $fixedarray = new FixedArray(5);
        $fixedarray[1] = "value 1";

        $this->assertEquals(5, $fixedarray->count());
        $this->assertEquals(5, count($fixedarray));   
        $this->assertEquals(NULL, $fixedarray[0]); 
        $this->assertEquals("value 1", $fixedarray[1]);  
        
        $fixedarray->setSize(10);
        
        $this->assertEquals("value 1", $fixedarray[1]); 
        $this->assertEquals(10, count($fixedarray));          
    }

}
?>

