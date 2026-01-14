<?php

namespace Wp\Categories;

use Corcel\Model\Taxonomy as Corcel;

class Category extends Corcel
{
    protected $connection = 'wordpress';

    protected $taxonomy = 'category';
}
