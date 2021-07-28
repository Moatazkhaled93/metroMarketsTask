<?php


namespace Main\Services;


use Main\Helpers\Iterator\AlphabeticalOrderIterator;

class WordsCollection implements \IteratorAggregate
{
    private $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator()
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator()
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}