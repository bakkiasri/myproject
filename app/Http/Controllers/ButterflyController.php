<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ButterflyController extends Controller
{
    

    public $id,$name,$email,$mobile,$expected_sal,$current_sal,$gender,$post,$comapny;

    public function index(){
        return view('display');
    }
    public function edit($id){
        $user = Product::find($id);

        return view('sample2',compact('user'));
    }
    public function first()
    {
        
        return view('display',[
            'users' => DB::table('products')->paginate(12)
        ]);
    }
    public function show(): View
    {
        return Product::get();
        return view('display');
    }
    public function save(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required',
            'email'=>'required',
        ]);

        
    //    $customer =new Product;
    //    $customer->name =$request->name;
    //    $customer->email =$request->email;
    //    $customer->mobile =$request->mobile;
    //    $customer->gender =$request->gender[0];
    //    $customer->post =$request->post;
    //    $customer->current_sal =$request->current_sal;
    //    $customer->comapny =$request->comapny;
    //    $customer->expected_sal =$request->expected_sal;
    //    $customer->save();
    //    return $customer;

        $customer =Product::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'mobile' =>$request->mobile,
            'gender' =>$request->gender[0],
            'comapny' =>$request->comapny,
            'post' =>$request->post,
            'current_sal' =>$request->current_sal,
            'expected_sal' =>$request->expected_sal,
        ]);
        return 'successfully inserted';

        
    }
    public function update(Request $request){
        $user = Product::find($request->id);
        $user->name =$request->name;
        $user->email =$request->email;
        $user->mobile =$request->mobile;
        $user->gender =$request->gender[0];
        $user->post =$request->post;
        $user->current_sal =$request->current_sal;
        $user->comapny =$request->comapny;
        $user->expected_sal =$request->expected_sal;
        $user->save();


        return 'Detailed updated successsfullyy';
    } 
    public function delete(Request $request)
    {
        $user = Product::find($request->id);
        $user->delete();

        return 'details have been deleted successfully';
    }

}
