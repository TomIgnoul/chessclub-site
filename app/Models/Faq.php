<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['view_count', 'faq_category_id', 'question', 'answer'];
}
