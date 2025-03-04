<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsTalent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class TalentController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            'auth',
            new Middleware(middleware: IsTalent::class),
        ];
    }

    public function home()
    {
        return view('users.talent.home');
    }
}
