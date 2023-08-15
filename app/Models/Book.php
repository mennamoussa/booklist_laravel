<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "price",
        "description",
        "pic",
        "cat_id"
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public static function uploadFile($request, $neededFile)
    {
        $fileName = "book_" . time() . '_' . $neededFile->getClientOriginalName();
        $request->file('pic')->storeAs(
            'public/books',
            $fileName
        );
        return $fileName;
    }
}
