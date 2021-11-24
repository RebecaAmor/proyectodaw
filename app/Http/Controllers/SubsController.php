<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Trainner;
use Spatie\Permission\Models\Role;

use Cart;

class SubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions=Subscription::all();
        return view('subs.subscription', compact('subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request){
        $subscription=Subscription::find($request->sub_id);
        Cart::add(
            $subscription->id,
            $subscription->subname,
            $subscription->subtype,
            $subscription->price
        );
        return back()->with('success', "El pack $subscription->subname se ha añadido correctamente a tu pedido");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        // $params=[
        //     'subname'=> 'Shopping cart checkout',
        // ];
        return view('subs.checkout');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
        //$subscription=Subscription::where('id',$request->sub_id)->firstOrFail();
        Cart::remove([
            'id'=>$subscription->id,
        ]);
        return back()->with('success', "Suscripción eliminada correctamente");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
