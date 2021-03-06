<?php

namespace Charm\Generator\Analysis;

class ItemSet
{
    /**
     * The items.
     *
     * @var Item[]
     *   The items.
     */
    public $items = [];

    /**
     * The additional items from closure of the item set.
     *
     * @var Item[]
     *   The additional items.
     */
    public $closureItems = [];

    /**
     * The transitions out of this item set.
     *
     * @var array
     *   [string element => int target item set]
     */
    public $transitions = [];
}
