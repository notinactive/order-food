<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuCollection;
use App\Models\Menu;
use Illuminate\Http\Response;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::where('status', 'enabled')->with('foods')->get();
        return response()->json(new MenuCollection($menus), Response::HTTP_OK);
    }
}
