<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestToDo;
use App\Models\todo;

class ToDOController extends Controller
{
    public function index()
    {
        return view('crud.blog');
    }

public function store(RequestToDo $request)
{
    $data= $request->all();
     // to uplode image right and easy way..
     $filename= time().$request->file('image')->getClientOriginalName();
     $path=$request->file('image')->storeAs('images',$filename,'public');
     $data["image"]='/storage/'.$path;

   todo::create($data);
//to redirect to ur to do list..
return redirect()->route('about')->with('status','Here Your DO TO LISTS');

}
public function about()
{
    $data = todo::paginate(7);

return view('crud.about',[
    'data'=>$data
]);
}



}
