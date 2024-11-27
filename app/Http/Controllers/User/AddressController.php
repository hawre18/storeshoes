<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses=Address::with(['city','province'])->where('user_id',Auth::user()->id)->paginate(10);
        return view('index.user.v1.addressList',compact(['addresses']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index.user.v1.addressCreate');
    }
    public function getAllProvince()
    {
        $provinces=Province::all();
        $response=[
            'provinces'=>$provinces
        ];
        return response()->json($response,200);
    }
    public function getAllCities($provinceId)
    {
        $cities=City::where('province_id',$provinceId)->get();
        $response=[
            'cities'=>$cities
        ];
        return response()->json($response,200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:3|max:255',
            'body'=>'required|min:3',
            'province'=>'required',
            'city'=>'required',
            'postCode'=>'required',
            'phone'=>'required',

        ]);
        try {
            $address = new Address();
            $address->title = $request->input('title');
            $address->body = $request->input('body');
            $address->province_id = $request->input('province');
            $address->city_id = $request->input('city');
            $address->postCode = $request->input('postCode');
            $address->phone = $request->input('phone');
            $address->user_id = Auth::user()->id;
            $address->save();
            Session::flash('address_success','ثبت آدرس با موفقیت انجام شد');
            return redirect('/addresses');
        }catch (Exception $e){
            Session::flash('address_warning','ثبت آدرس با خطا مواجه شد لطفا مجددا تلاش کنید');
            return redirect('/addresses');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $address=Address::with('province','city')->whereId($id)->first();
        return view('index.user.v1.addressEdit',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required|min:3|max:255',
            'body'=>'required|min:3',
            'province'=>'required',
            'city'=>'required',
            'postCode'=>'required',
            'phone'=>'required',

        ]);
        try {
            $address = Address::findorfail($id);
            $address->title = $request->input('title');
            $address->body = $request->input('body');
            $address->province_id = $request->input('province');
            $address->city_id = $request->input('city');
            $address->postCode = $request->input('postCode');
            $address->phone = $request->input('phone');
            $address->user_id = Auth::user()->id;
            $address->save();
            Session::flash('address_success','ویرایش آدرس با موفقیت انجام شد');
            return redirect('/addresses');
        }catch (Exception $e){
            Session::flash('address_warning','ویرایش آدرس با خطا مواجه شد لطفا مجددا تلاش کنید');
            return redirect('/addresses');
        }
    }
    public function delete($id)
    {
        try{
            $address=Address::findorfail($id);
            $address->delete();
            Session::flash('address_success','آدرس با موفقیت حذف شد');
            return redirect('/addresses');}
        catch (\Exception $m) {
            Session::flash('address_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/addresses');
        }

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
