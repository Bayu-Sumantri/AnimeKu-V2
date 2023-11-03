<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use RyanChandler\Comments\Concerns\HasComments;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commant extends Model
{
    use HasComments;
    // use HasFactory;

    protected $table="comments";


    


}