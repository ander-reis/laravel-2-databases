<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // No caso do MySQL 1, setar um valor para $connection é opcional
    protected $connection = 'mysql';
}
