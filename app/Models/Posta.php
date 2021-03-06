<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posta extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;

    protected $guarded = [];

    public function category() {

        return $this->belongsTo(Category::class, 'category_id', 'id');

    }

    public function tags(){

        return $this->belongsToMany(Tag::class, 'posta_tags',
            'post_id', 'tag_id');

            }


}
