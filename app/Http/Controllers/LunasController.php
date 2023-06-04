<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class LunasController extends Controller
{
     public function lunas()
     {
        $lunas = Order::where('payment_status', 'lunas')->get();
        return view ('lunas', compact('lunas'));
     }

     public function notlunas()
     {
        $notlunas = Order::where('payment_status', 'Belum lunas')->get();
        return view('belum_lunas', compact('notlunas'));
     }

     public function edit(Request $request, $id)
     {
        $order = Order::findOrFail($id);

        $order->payment_status=$request->input('payment_status');

        $order->save();

        if ($order->payment_status=='Belum lunas') {
            return redirect()->route('lunas.notlunas')->with('lunasup2', 'Order belum lunas!');
        }elseif($order->payment_status=='Lunas'){
            return redirect()->route('lunas.notlunas')->with('lunasup', 'Order lunas!');
        }
     }

     public function update(Request $request, $id)
     {
        $order = Order::findOrFail($id);

        $order->payment_status=$request->input('payment_status');

        $order->save();

        if ($order->payment_status=='Belum lunas') {
            return redirect()->route('lunas.lunas')->with('lun1', 'Order belum lunas!');
        }elseif($order->payment_status=='Lunas'){
            return redirect()->route('lunas.lunas')->with('lun2', 'Order lunas');
        }
     }

     public function destroy($id)
     {
        $lunas = Order::findOrFail($id);

    if ($lunas->proof_payment) {
        $oldFilePath = public_path('bukti/'.$lunas->proof_payment);
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);
        }
    }
    $lunas->delete();

    return redirect()->route('lunas.notlunas')->with('notlunasdel', 'Terhapus!');
     }

     public function delete($id)
     {
        $notlunas = Order::findOrFail($id);

    if ($notlunas->proof_payment) {
        $oldFilePath = public_path('bukti/'.$notlunas->proof_payment);
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);
        }
    }
    $notlunas->delete();

    return redirect()->route('lunas.lunas')->with('lunasdel', 'Terhapus!');
     }
}
