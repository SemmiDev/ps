<?php

namespace App\Http\Controllers;

use App\Models\GamesData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyAccountController extends Controller
{
    public function create($id) {
        $game = GamesData::getGameAccountById($id);
        return view('customer.buy-account', [
            'game' => $game,
        ]);
    }

    public function store($id) {
        try {
            $data = request()->all();
            $userId = auth()->user()->id;

            $item = explode('~', request()->input('item'));

            $spec = $item[0];
            $price = (float) $item[1];

            $email = $item[2];
            $pasword = $item[3];

            $credential = $email . ' | ' . $pasword;

            $paymentMethod = request()->input('payment_method');

            $insertData = [
                'user_id' => $userId,
                'game_id' => $id,
                'topup_account' => $credential,
                'item' => $spec,
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
