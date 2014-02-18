<?php

/**
 * Description of ArrayIteratorTest
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require 'vendor/autoload.php';

use OOPWithSPL\Iterator\ArrayIterator;

class ArrayIteratorTest extends \PHPUnit_Framework_TestCase {

    public function testArrayIterator()
    {
        $it = new ArrayIterator();
        $it['test1'] = 'value1';
        $it['test2'] = 'value2';
        
        $this->assertEquals(2, $it->count());
        $this->assertEquals(array('test1'=>'value1','test2'=>'value2'), $it->getArrayCopy());
    }

}
?>

