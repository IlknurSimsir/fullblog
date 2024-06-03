<?php

namespace App\Http\Controllers;
use stdClass;
use Illuminate\Http\Request;
use App\Models\All_texts;
use App\Models\Category;
use App\Models\Subtitle;

class AdminController extends Controller
{
    public function admin_index()
    {
        return view('admin.adminmain');
    }
    public function table()
    {
        $veri = new stdClass;
        $veri -> all_texts = All_texts::get(); 
        return view('admin.all_texts', compact('veri')); 

    }
    public function delete($id)
    {
        All_texts::deleteData($id);
        return back(); 
    }
    public function dene()
    {
        $veri = new stdClass;
        $veri -> all_texts = All_texts::get(); 
        return view('admin.dene', compact('veri')); 
    }
    
    public function createtext()
    {
        $veri = new stdClass;
        $veri -> subtitle = Subtitle::get(); 
        $veri -> category = Category::get(); 
        return view('admin.create_text',compact('veri')); 
        
    }
    public function createtextpost(Request $request)
    {

        $text = new All_texts();
        $text->contents = $request->input('contents');
        $text->category_id = $request->input('category');
        $text->suptitle = $request->input('subtitle');
        $text->click = 0;
        $text->save();

        return redirect()->back()->with('success', 'Veri başarıyla kaydedildi!');
    }
    public function updatetext()
    {
        $veri = new stdClass;
        $veri -> subtitle = Subtitle::get(); 
        $veri -> category = Category::get(); 
        $veri -> all_texts = All_texts::get(); 
        $eid = request('eid');
        return view('admin.update_text',['eid' => $eid,'veri'=> $veri]); 
        
    }
    public function updatetextpost(Request $request)
    {
        // 'eid' parametresini al
        $eid = $request->input('eid');

        // Güncellenecek metni bul
        $text = All_texts::find($eid);

        if ($text) {
            // Form verilerini modele atayın
            $text->contents = $request->input('contents');
            $text->category_id = $request->input('category');
            $text->suptitle = $request->input('subtitle'); // 'suptitle' yerine 'subtitle_id' kullanımı

            // Güncellenen veriyi kaydet
            $text->save();

            return redirect()->back()->with('success', 'Veri başarıyla güncellendi!');
        } else {
            return redirect()->back()->with('error', 'Veri bulunamadı.');
        }
    }
    
}
