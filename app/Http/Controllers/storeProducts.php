<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productsImage;

use App\Models\products as prod;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;


class storeProducts extends Controller
{
    public function home(){
       $response= prod::all();
        return view('showAll',[
            'result'=>$response,
        ]);
    }
    public function showindi($id){
        $result=prod::findorfail($id);
        $path=$result->path;
        
          return view('showindi',[
            'result'=>$result,
            
            
          ]);
    }
    public function create(){
        return view('CreateProducts');
    }
    public function store(Request $request){
        
        // $img=Image::make( $key);
        // dd($key);
        // $img->insert(public_path('logo/logo.png'), 'bottom-right', 10, 10)->save();
        
        $request->validate([
            'name'=>['required'],   
            'quantity'=>['required'], 
            'price'=>['required'], 
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            
            
        ]);
        $filename=time().'.'.$request->file('picture')->extension();
        
        $path=$request->file('picture')->storeAs(
           'Products',$filename,'public'
         );
       $prod= prod::create([
           'name'=>$request->name,
           'quantity'=>$request->quantity,
           'price'=>$request->price,
           'bought_day'=>$request->date,
           'desc'=>$request->desc,
        ]);
        
        $image= new productsImage();
        $image->path=$path;
        
        $prod->product()->save($image);
        return redirect('/',302);
    }
    public function delete($id){
        Prod::destroy($id);
        
        return redirect('/',302);

    }
}
