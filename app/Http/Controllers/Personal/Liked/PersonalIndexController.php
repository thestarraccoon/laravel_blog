<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PersonalIndexController extends Controller
{
    public function __invoke()
    {
        return  view('personal.liked.index');
    }
}
