<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\wishlist;
use App\Models\Products;
use App\Models\orderstock;
use App\Models\Profile;
use Illuminate\Support\Facades\Log; 
class UserDashboardController extends Controller
{
    public function userdashboard()
     {
         return view('frontend.dashboard');
    }
    public function userdashboard1()
    {
        return view('frontend.dashboard1');
   }
   public function addtocart()

   {
    $product = \DB::table('products')->get(); //
       return view('frontend.addtocart',compact('product'));
  }
  public function Mycart()

   {
    $product=\DB::table('products')->get(); // Ensures a valid product
    //dd($product);
       return view('frontend.layout.footer',compact('product'));
  }
  public function checkout()
  {
      return view('frontend.checkout');
 }
  public function ProductDetail(Request $request)
   {
      
    $productDetail= Products::get() ;
    // echo"<pre>";
    // print_r($product->toArray());
    // echo"</pre>";
    // die;
 
    if ($request->ajax()) {
      
     // $data = User::select('id','name','email','password','language','phonenumber','address','gender','role')->get();
      // Remove this line after debugging
 
      
      return Datatables::of($data)
          ->addIndexColumn()
          ->addColumn('action', function ($row) {
              $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
              return $btn;
              // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
              // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
              // return $btn;
          })
          ->rawColumns(['action'])
          ->make(true);
         // return response()->json($data);
         //return response()->json(['data' => $data]);
          }
 $data=compact('productDetail');
    return view('frontend.productDetail')->with($data);
 
  }

  public function ordertracking(Request $request)
  {
     
   $orderstock= orderstock::get() ;
   // echo"<pre>";
   // print_r($product->toArray());
   // echo"</pre>";
   // die;

   if ($request->ajax()) {
     
    // $data = User::select('id','name','email','password','language','phonenumber','address','gender','role')->get();
     // Remove this line after debugging

     
     return Datatables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function ($row) {
             $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
             return $btn;
             // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
             // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
             // return $btn;
         })
         ->rawColumns(['action'])
         ->make(true);
        // return response()->json($data);
        //return response()->json(['data' => $data]);
         }
$data=compact('orderstock');
   return view('frontend.ordertracking')->with($data);

 }
  public function addtocartstore(Request $request)
  {
    $request->validate([
        "productid"=>"required",

        "Quantity"=>"required",
       
        "price"=>"required",
     
  
     ]);
  print_r($request->all());
  $cart= new Cart;

$cart->productid=$request['productid'];

$cart->quantity=$request['Quantity'];
$cart->price=$request['price'];
$cart->save();
return redirect()->route('cart');
  }
  public function addwishlist()
  {
   
    $products = \DB::table('products')->get();
    $customers = \DB::table('customers')->get();
    $orderitem = \DB::table('orderitem')->get();
    return view('frontend.wishlistform',compact('products','customers','orderitem'));
 }
  public function wishlist(Request $request)
  {
    $wishlist= wishlist::get() ;
   // echo"<pre>";
   // print_r($product->toArray());
   // echo"</pre>";
   // die;

   if ($request->ajax()) {
     
    // $data = User::select('id','name','email','password','language','phonenumber','address','gender','role')->get();
     // Remove this line after debugging

     
     return Datatables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function ($row) {
             $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
             return $btn;
             // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
             // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
             // return $btn;
         })
         ->rawColumns(['action'])
         ->make(true);
        // return response()->json($data);
        //return response()->json(['data' => $data]);
         }
$data=compact('wishlist');
   return view('frontend.wishlist')->with($data);

    //   return view('frontend.wishlist');
 }
 public function wishliststore(Request $request)
  {
    $request->validate([
      "productid"=>"required",
      "customerid"=>"required",
      "Orderid"=>"required",
      "Description"=>"required",
      "Quantity"=>"required",
      "price"=>"required",
       "file"=>"required",
     ]);
  print_r($request->all());
  // echo die;
  $cart= new wishlist;

  $cart->productid=$request['productid'];
  $cart->customerid=$request['customerid'];
  $cart->orderid=$request['Orderid'];
  $cart->description=$request['Description'];
  $cart->quantity=$request['Quantity'];
  
  $cart->price=$request['price'];
  $cart->image=$request['file'];
  if ($request->hasFile('file')) {
    $file1 = $request->file('file');
    $ext1 = $file1->getClientOriginalExtension();
    $filename1 = time() . '_' . $cart->name . '.' . $ext1;
    $file1->move('uploads/', $filename1);
    $cart->image = $filename1; // Save file name to the model attribute
 }
 if ($cart->save()) {
  return response()->json(['status' => 'Cart stored successfully']);
} else {
  return response()->json(['status' => 'Failed to store category'], 500);
}
}
public function continueshopping1(Request $request)
  {
    $request->validate([
        "Firstname"=>"required",

        "Lastname"=>"required",
       
        "PhoneNumber"=>"required",
        "email"=>"required",
        "adderess"=>"required",
        "total_price"=>"required",
        "billing_date"=>"required",
      "order_status"=>"required",
  
     ]);
  print_r($request->all());
  $orderstock= new  orderstock;

$orderstock->Firstname=$request['Firstname'];

$orderstock->Lastname=$request['Lastname'];
$orderstock->PhoneNumber=$request['PhoneNumber'];
$orderstock->email=$request['email'];
$orderstock->adderess=$request['adderess'];
$orderstock->total_price=$request['total_price'];
$orderstock->billing_date=$request['billing_date'];
// $orderstock->order_status=$request['order_status'];
$orderstock->save();
  }
  public function cart()
  {
   
    $cart = \DB::table('cart')->get();
    // $customers = \DB::table('customers')->get();
    // $orderitem = \DB::table('orderitem')->get();
    return view('frontend.cart',compact('cart'));
 }
 public function profile() 
 {
   return view('frontend.profile');
 }
 public function profilestore(Request $request) 
 {
  
  $request->validate([
    "Firstname"=>"required",

    "Lastname"=>"required",
   
    "Phonenumber"=>"required",
    "Email"=>"required",
    "message"=>"required",
    "flat"=>"required",
    "Adderess"=>"required",
  "zipcode"=>"required",
  "country"=>"required",
  "city"=>"required",
  "region"=>"required",
  

 ]);
print_r($request->all());
$profile= new Profile;
$profile->Firstname=$request['Firstname'];
$profile->Lastname=$request['Lastname'];
$profile->Phonenumber=$request['Phonenumber'];
$profile->Email=$request['Email'];
$profile->message=$request['message'];
$profile->flat=$request['flat'];
$profile->Adderess=$request['Adderess'];
$profile->zipcode=$request['zipcode'];
$profile->country=$request['country'];
$profile->city=$request['city'];
$profile->region=$request['region'];
$profile->save();




  // return view('frontend.profile');
 }
}