<?php

/**
 * Description of Heap
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OOPSPL\Heap;

class Heap extends \SplHeap {

    protected function compare($value1, $value2)
    {
        return $value1['note'] - $value2['note'];
    }

    public function display()
    {
        foreach ($this as $h)
        {
            print(sprintf('le candidat %s à la note de %d '. '<br/>', $h['name'], $h['note']));
        }
    }

}
?>

