<?php

/**
 * Description of ObjectStorageTest
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require 'vendor/autoload.php';

use OOPSPL\ObjectStorage\ObjectStorage;

class ObjectStorageTest extends \PHPUnit_Framework_TestCase {

    public function testObjectStorage()
    {
        $obj1 = new \stdClass();
        $obj2 = new \stdClass();

        $ObjectStorage = new ObjectStorage();
        $ObjectStorage->attach($obj1);
        $ObjectStorage->attach($obj2);

        $this->assertEquals(2, $ObjectStorage->count());

        $ObjectStorage->detach($obj2);        
        $this->assertFalse($ObjectStorage->contains($obj2));       

    }

}
?>

