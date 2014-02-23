<?php

/**
 * Description of CachingIterator
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OOPSPL\Iterator\Caching;

use OOPSPL\Iterator\ArrayIterator\ArrayIterator;

class CachingIterator {

    private $numberIterator;
    private $cachingarrayiterator;

    /**
     * 
     * @param type $b
     * @param type $l
     */
    public function generateRangeNumber($b, $l)
    {
        $this->numberIterator = new ArrayIterator(range($b, $l));
    }

    /**
     * 
     * @param \ArrayIterator $it
     */
    public function addIteratorToCache(\ArrayIterator $it)
    {
        $this->cachingarrayiterator = new \CachingIterator($it);
    }

    /**
     * 
     * @return \ArrayIterator
     */
    public function getRangeNumberIterator()
    {
        return $this->numberIterator;
    }

    /**
     * 
     * @return \CachingIterator
     */
    public function getCachingArrayIterator()
    {
        return $this->cachingarrayiterator;
    }

}
?>

