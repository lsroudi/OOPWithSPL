<?php

/**
 * Description of ArrayIterator
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OOPSPL\Iterator\ArrayIterator;

class ArrayIterator extends \ArrayIterator {

    public function __construct($array = 'array()', $flags = 0)
    {
        parent::__construct($array, $flags);
    }

}
?>

