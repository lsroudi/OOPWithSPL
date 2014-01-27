<?php

/**
 * Description of HeapTest
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once 'vendor/autoload.php';

use OOPWithSPL\Heap\Heap;

class HeapTest extends \PHPUnit_Framework_TestCase {

    public function testOrderHeap()
    {
        $heap = new Heap();
        $heap->insert(array('name' => 'abdel', 'note' => 15));
        $heap->insert(array('name' => 'paul', 'note' => 17));
        $heap->insert(array('name' => 'joseph', 'note' => 10));
        $heap->insert(array('name' => 'xavier', 'note' => 19));
        $heap->insert(array('name' => 'chantal', 'note' => 11));

        $this->assertEquals(array('name' => 'xavier', 'note' => 19), $heap->extract());
        $this->assertEquals(array('name' => 'paul', 'note' => 17), $heap->extract());
        $this->assertEquals(array('name' => 'abdel', 'note' => 15), $heap->extract());
        $this->assertEquals(array('name' => 'chantal', 'note' => 11), $heap->extract());
        $this->assertEquals(array('name' => 'joseph', 'note' => 10), $heap->extract());
    }

}
?>

