<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public static function getValidationRules(): array
    {
        return [
            'title' => 'required|max:255',
            'inform' => 'required'
        ];
    }

    public static function getAttributesNames(): array
    {
        return [
            'title' => 'Заголовок',
            'inform' => 'Содержание новости'
        ];
    }
}
