<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use \Illuminate\Support\Facades\Cache;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    
}
