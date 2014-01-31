<?php

/**
 * Description of MaxHeap
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OOPWithSPL\Heap;

class MaxHeap extends \SplMaxHeap {
    
    /**
     * MaxSplHeap is simply a SplHeap with an implemented compare method 
     * where the highest element is always in the top of the list
     */
}

//Example
//$maxheap = new MaxHeap();
//$maxheap->insert('b');
//$maxheap->insert('c');
//$maxheap->insert('a');
//$maxheap->insert('d');
//
//foreach ($maxheap as $char)
//{
//    print $char . PHP_EOL;
//}
// d c b a
?>

