<?php

/**
 * Description of PriorityLoggerInterface
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OOPWithSPL\Priority;

interface PriorityLoggerInterface {

    public function insert($value, $priority);

    public function extract();
}
?>
