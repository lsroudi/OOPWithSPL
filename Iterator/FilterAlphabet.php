<?php

/**
 * Description of FilterAlphabet
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OOPWithSPL\Iterator;

use OOPWithSPL\Iterator\AlphabetIterator;

class FilterAlphabet extends \FilterIterator {

    public function accept()
    {
        return (in_array($this->current(), array('a', 'b', 'c')));
    }

}

$alph = new AlphabetIterator();
$filtered = new FilterAlphabet($alph);

foreach ($filtered as $key => $value)
{
    echo $key . '---' . $value . PHP_EOL;
}

?>

