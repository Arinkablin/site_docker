<?php

namespace Src\Controllers;
use ORM;

class ProductController
{
    public function list(): array|\IdiormResultSet
    {
        return ORM::for_table('flowers')->find_many();
    }
}