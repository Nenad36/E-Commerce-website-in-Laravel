<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function coupon()
    {
        $coupon = DB::table('coupons')->get();
        return view('admin.coupon.coupon', compact('coupon'));
    }

    public function storecoupon(Request $request)
    {
        $this->validate($request, [
            'coupon' => 'required',
            'discount' => 'required',
        ]);

        $data = array();
        $data['coupon'] = $request->coupon;
        $data['discount'] = $request->discount;
        DB::table('coupons')->insert($data);
        $notification=array(
            'messege'=>'Coupons Inserted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function editcoupon($id)
    {
        $coupon = DB::table('coupons')->where('id', $id)->first();
        return view('admin.coupon.edit_coupon', compact('coupon'));
    }

    public function updatecoupon(Request $request, $id)
    {

        $this->validate($request, [
            'coupon' => 'required',
            'discount' => 'required',
        ]);

        $data = array();
        $data['coupon'] = $request->coupon;
        $data['discount'] = $request->discount;
        DB::table('coupons')->where('id', $id)->update($data);
        $notification=array(
            'messege'=>'Coupons Update Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->route('admin.coupon')->with($notification);


    }

    public function deletecoupon($id)
    {
        DB::table('coupons')->where('id', $id)->delete();
        $notification=array(
            'messege'=>'Coupons Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function newsletter(){
        $sub = DB::table('newslaters')->get();
        return view('admin.coupon.newsletter',compact('sub'));
    }

    public function deletesub($id){
        DB::table('newslaters')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Subscriber Deleted Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }


    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("newslaters")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }

}
