<?php

/**
 * Description of AlphabetIterator
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace OOPSPL\Iterator;

class AlphabetIterator implements \Iterator {

    protected $current;
    protected $key;

    public function current()
    {
        return $this->current;
    }

    public function key()
    {
        return $this->key;
    }

    public function next()
    {
        $this->current++;
        $this->key++;
        return $this->current;
    }

    public function rewind()
    {
        $this->current = 'a';
        $this->key = 1;
    }

    public function valid()
    {
        return ($this->key <= 26);
    }

}

$alph = new AlphabetIterator();
foreach ($alph as $key => $value)
{
    echo $key . '---' . $value . PHP_EOL;
}
?>

