<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [

            [
                'id' => 1,
                'title' => 'Assasin',
                'salary' => 500000
            ],
            [
                'id' => 2,
                'title' => 'Paladin',
                'salary' => 1000000
            ],
            [
                'id' => 3,
                'title' => 'Imperial guard',
                'salary' => 1500000
            ]
        ];
    }
    public static function find($id):array{
        $job = Arr::first(static::all(),fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        else {
            return $job;
        }
    }
}
