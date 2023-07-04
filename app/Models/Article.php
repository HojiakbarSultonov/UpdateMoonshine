<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use MoonShine\Fields\BelongsToMany;
use MoonShine\Fields\HasMany;
use MoonShine\Models\MoonshineUser;
use MoonShine\Tests\Fixtures\Models\Category;

class Article extends Model
{
    use HasFactory;


protected $casts = [
    'Files' => 'collection',
    'Data'=>'collection',
    'active'=>'bool'
];
public function categories(): BelongsToMany{
    return $this->belongsToMany(Category::class);
}

    public function author(): BelongsTo{
        return $this->BelongsTo(MoonshineUser::class);
    }


    public function comments(): HasMany{
        return $this->BelongsTo(MoonshineUser::class);
    }




}

