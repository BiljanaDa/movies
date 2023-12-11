<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct() {
        $this->latest_movies = Movie::orderBy('id', 'desc')->take(5)->get();
        View::share('latest_movies', $this->latest_movies);
    }

}
