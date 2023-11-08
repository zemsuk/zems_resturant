<?php
namespace Zems\ZemsRestaurant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{   
    public function index($data = false)
    {
        return "ZemsAuth demo";
    }    
}
