<?php

namespace App\Http\Controllers;

use App\Shipping;
use App\Transport;
use App\Type;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $shipments = Shipping::all()->sortByDesc('created_at');
        return view('admin.header',  compact('shipments'));
    }

    //***** Shipping Type from here *****//
    public function shippingType()
    {
        return view('admin.categories.shipping_type.index');
    }

    public function shippinglist()
    {
        $shippinglist = Type::all()->sortByDesc('created_at');
        return view('admin.categories.shipping_type.list', compact('shippinglist'));
    }

    public function createShipping(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        $shipping = new Type;
        $shipping->name = $request->name;
        $shipping->save();

        return back()->with('ShippingType', 'Shipping Type Has Been Added Successfully!.');
    }

    public function editShipping($id)
    {
        $shipping = Type::where('id', $id)->first();
        return view('admin.categories.shipping_type.edit', compact('shipping'));
    }

    public function updateShipping(Request $request, $id)
    {
        $shipping = Type::where('id', $id)->first();
        $shipping->name = $request->name;
        $shipping->save();

        return back()->with('ShippingType', 'Shipping Type Has Been Updated Successfully!.');
    }

    public function destroyType($id)
    {
        Type::where('id', $id)->delete();
        return back();
    }


    //**** Transport Mode From Here ****//

    public function addTransport()
    {
        return view('admin.categories.transport.index');
    }

    public function listTransport()
    {
        $transports = Transport::all()->sortByDesc('created_at');
        return view('admin.categories.transport.list', compact('transports'));
    }

    public function createTransport(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        $transport = new Transport;
        $transport->name = $request->name;
        $transport->save();

        return back()->with('Transport', 'Transport Mode Has Been Added Successfully!.');
    }

    public function editTransport($id)
    {
        $transports = Transport::where('id', $id)->first();
        return view('admin.categories.transport.edit', compact('transports'));
    }

    public function updateTransport(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        $transport = Transport::where('id', $id)->first();
        $transport->name = $request->name;
        $transport->save();

        return back()->with('Transport', 'Transport Mode Has Been Updated Successfully!.');
    }

    public function destroyTransport($id)
    {
        Transport::where('id', $id)->delete();
        return back();
    }
}
