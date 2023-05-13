<?php

namespace App\Http\Controllers;

use App\Domain\Entities\PlayerEntity;

class TestController extends Controller
{
    public function index()
    {
        $player = new PlayerEntity();
        dd($player);
    }
}
