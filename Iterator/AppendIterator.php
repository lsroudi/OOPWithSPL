<?php

/**
 * Description of Directory
 *
 * (c) lsroudi <http://lsroudi.com/> <lsroudi@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace OOPWithSPL\Iterator;

class AppendIterator {

    public function __construct()
    {
        $append = new \AppendIterator();
        $append->append(new \DirectoryIterator('./Fixture/dir1'));
        $append->append(new \DirectoryIterator('./Fixture/dir2'));

        foreach ($append as $item)
        {
            echo $item . PHP_EOL;
        }
    }

}

new AppendIterator;
?>

