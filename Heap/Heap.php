<?php

/**
 * Description of Heap
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OOPWithSPL\Heap;

class Heap extends \SplHeap {

    protected function compare($value1, $value2)
    {
        return $value1 - $value2;
    }

}
?>

