<?php

namespace App\Http\Controllers;

use App\Models\GamesData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopUpController extends Controller
{
    public function create($id) {
        $game = GamesData::getGameById($id);
        return view('customer.topup', [
            'game' => $game,
        ]);
    }

    public function store($id) {
        try {

            $data = request()->all();
            $userId = auth()->user()->id;

            $item = request()->input('item');
            $item = explode('|', $item);

            $data = $item[0];

            $price = $item[1];
            $price = (float) $price;

            $paymentMethod = request()->input('payment_method');
            $topUpAccount = request()->input('user_id');

            $insertData = [
                'user_id' => $userId,
                'topup_account' => $topUpAccount,
                'game_id' => $id,
                'item' => $data,
                'payment_method' => $paymentMethod,
                'price' => $price,
                'description' => "-",
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('orders')->insert($insertData);

            return response()->json([
                'message' => 'Top up berhasil dilakukan',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Top up gagal dilakukan, karena: ' . $th->getMessage(),
            ], 500);
        }
    }

    public function updateStatus(Request $request, $id) {
        try {
            $data = $request->all();
            $status = $data['status'];

            DB::table('orders')->where('id', $id)->update([
                'status' => $status,
            ]);

            return back()->with('success', 'Status berhasil diubah');
        } catch (\Throwable $th) {
            return back()->with('error', 'Status gagal diubah');
        }
    }
}
