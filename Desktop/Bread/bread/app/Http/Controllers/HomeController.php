<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    public function product()
    {
        $breads = DB::select('select * from bread');
        return view('pages.product',['breads'=>$breads]);
    }

    public function insert(Request $request){
        $name = $request->name;
        $total = $request->total;
        $price = $request->price;
        $detail = $request->detail;
        $img = $request->img;
//        dd($name, $total, $price, $detail, $img);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/breads/', $filename);
            $img = $filename;
        }else{
            return $request;
            $img = 'No Picture!';
        }

        $data=array('bread_name'=>$name,"bread_total"=>$total,"bread_price"=>$price,"bread_detail"=>$detail,"bread_img"=>$img);
        DB::table('bread')->insert($data);
        return redirect()->route('admin/product');
    }

    public function destroy(Request $request){
        $id = $request->id_del_modal;
        DB::delete('delete from bread where bread_id = ?',[$id]);
        return redirect()->route('product');
    }

    public function edit(Request $request){
        $id = $request->update_id;
        $name = $request->update_name;
        $total = $request->update_total;
        $price = $request->update_price;
        $detail = $request->update_detail;
        $img = $request->update_img;

        if ($request->hasFile('update_img')) {
            $file = $request->file('update_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/breads/', $filename);
            $img = $filename;
        }else{
            return $request;
            $img = 'No Picture!';
        }

//        dd($id,$name,$price);
        DB::update('update bread set bread_name = ?,bread_total = ?,bread_price = ?,bread_detail = ?,bread_img = ? where bread_id = ?',[$name,$total,$price,$detail,$img,$id]);
        return redirect()->route('admin/product');
    }
}
