<?php

namespace App\Models;

class Listing {

    public static function all() {
        return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'lorem lorem lorem lorem lorem'
                ],
    
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'lorem lorem lorem lorem lorem'
                ]
        ];
    }
};