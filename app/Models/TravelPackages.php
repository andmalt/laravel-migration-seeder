<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelPackages extends Model
{
    protected $fillables = ['name','locality','date_from','date_to','guests','rooms','amenities','rating','description','price'];
}
