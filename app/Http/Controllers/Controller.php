<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $categories = [
        [
            'title' => 'category0',
            'description' => 'description for category0'
        ],
        [
            'title' => 'category1',
            'description' => 'description for category1'
        ],
        [
            'title' => 'category2',
            'description' => 'description for category2'
        ],
        [
            'title' => 'category3',
            'description' => 'description for category3'
        ],
        [
            'title' => 'category4',
            'description' => 'description for category4'
        ],
        [
            'title' => 'category5',
            'description' => 'description for category5'
        ],
    ];

    protected $news = [
        [
            'id' => '1',
            'categoryId' => '0',
            'head' => 'news01',
            'text' => 'text for news01'
        ],
        [
            'id' => '2',
            'categoryId' => '0',
            'head' => 'news02',
            'text' => 'text for news02'
        ],
        [
            'id' => '3',
            'categoryId' => '0',
            'head' => 'news03',
            'text' => 'text for news03'
        ],
        [
            'id' => '4',
            'categoryId' => '0',
            'head' => 'news04',
            'text' => 'text for news04'
        ],
        [
            'id' => '5',
            'categoryId' => '1',
            'head' => 'news11',
            'text' => 'text for news11'
        ],
        [
            'id' => '6',
            'categoryId' => '1',
            'head' => 'news12',
            'text' => 'text for news12'
        ],
        [
            'id' => '7',
            'categoryId' => '1',
            'head' => 'news13',
            'text' => 'text for news13'
        ],
        [
            'id' => '8',
            'categoryId' => '1',
            'head' => 'news14',
            'text' => 'text for news14'
        ],
        [
            'id' => '9',
            'categoryId' => '2',
            'head' => 'news21',
            'text' => 'text for news21'
        ],
        [
            'id' => '10',
            'categoryId' => '2',
            'head' => 'news22',
            'text' => 'text for news22'
        ],
        [
            'id' => '11',
            'categoryId' => '2',
            'head' => 'news23',
            'text' => 'text for news23'
        ],
        [
            'id' => '12',
            'categoryId' => '2',
            'head' => 'news24',
            'text' => 'text for news24'
        ],
        [
            'id' => '13',
            'categoryId' => '3',
            'head' => 'news31',
            'text' => 'text for news31'
        ],
        [
            'id' => '14',
            'categoryId' => '3',
            'head' => 'news32',
            'text' => 'text for news32'
        ],
        [
            'id' => '15',
            'categoryId' => '3',
            'head' => 'news33',
            'text' => 'text for news33'
        ],
        [
            'id' => '16',
            'categoryId' => '3',
            'head' => 'news34',
            'text' => 'text for news34'
        ],
        [
            'id' => '17',
            'categoryId' => '4',
            'head' => 'news41',
            'text' => 'text for news41'
        ],
        [
            'id' => '18',
            'categoryId' => '4',
            'head' => 'news42',
            'text' => 'text for news42'
        ],
        [
            'id' => '19',
            'categoryId' => '4',
            'head' => 'news43',
            'text' => 'text for news43'
        ],
        [
            'id' => '20',
            'categoryId' => '4',
            'head' => 'news44',
            'text' => 'text for news44'
        ]
    ];

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function getCategoryNews(string $categoryId): array
    {
        return Arr::where($this->news, function ($value) use ($categoryId) {
            return $value['categoryId'] === $categoryId;
        });
    }

    public function getNewsOne(string $newsId): array
    {
        return Arr::first($this->news, function ($value) use ($newsId) {
            return $value['id'] === $newsId;
        });
    }
}
