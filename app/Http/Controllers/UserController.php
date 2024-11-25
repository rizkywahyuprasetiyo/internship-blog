<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $dataUser = User::query()
            ->get();

        return view(
            'user.index',
            compact(
                'dataUser'
            )
        );
    }

    public function hapus(User $user)
    {
        $user->delete();

        return back()->with('success', 'Data user berhasil dihapus');
    }
}
