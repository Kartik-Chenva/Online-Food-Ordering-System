<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Correct the table name
    public $table = 'contacts';
    
    // Specify the primary key
    public $primaryKey = 'cust_id';

    // To prevent mass assignment issues, you can add:
    public $fillable = ['fullname', 'email', 'yournumber', 'message'];
}
