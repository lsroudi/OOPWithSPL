<?php

/**
 * Description of CachingIteratorTest
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require 'vendor/autoload.php';

use OOPSPL\Iterator\Caching\CachingIterator;

class CachingIteratorTest extends \PHPUnit_Framework_TestCase {

    public function testArrayIterator()
    {
        $it = new CachingIterator();
        $it->generateRangeNumber(1, 3);

        $this->assertEquals(3, $it->getRangeNumberIterator()->count());
        
        $it->addIteratorToCache($it->getRangeNumberIterator());
        $ci = $it->getCachingArrayIterator();
        
        foreach ($ci as $v)
        {
            if (!$ci->hasNext()){
                $this->assertEquals(NULL, $ci->next());
            }
        }
    }

}
?>

