<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtitle;
use App\Models\Category;
use App\Models\All_texts;
use stdClass;

class CategoryController extends Controller
{
    public function liste()
    {
        $veri = new stdClass;
        $veri -> category = Category::get();
        $veri -> subtitle = Subtitle::get(); 
        $veri -> all_click = All_texts::sum('click'); 
        $veri -> all_texts_count = All_texts::count(); 
        $veri -> all_category_count = Category::count(); 
        $veri -> all_subtitle = Subtitle::count(); 
        $veri -> all_texts = All_texts::get(); 
        return view('index', compact('veri')); // 'index.blade.php' dosyasına kategorileri gönderiyoruz


    }

    public function subtitle(){
        $veri = new stdClass;
        $veri -> all_texts = All_texts::get(); 
        $veri -> category = Category::get();
        $veri -> subtitle = Subtitle::get(); 
        $sub = request('sub');
        return view("portfolio-details",['sub' => $sub,'veri'=> $veri]);
    }
    
   
}
