<?php

namespace Collections\Iterator;

class ArrayIterator extends IteratorCollectionAdapter implements CountableSeekableIterator
{

    private $count;


    public function __construct(array $array)
    {
        parent::__construct(new \ArrayIterator($array));
        $this->count = count($array);
    }


    /**
     * @param int $position
     * @link http://php.net/manual/en/seekableiterator.seek.php
     * @return void
     */
    public function seek($position)
    {
        $this->getInnerIterator()->seek($position);
    }


    public function count()
    {
        return $this->count;
    }


    /**
     * @return \ArrayIterator
     */
    public function getInnerIterator()
    {
        return parent::getInnerIterator();
    }

}