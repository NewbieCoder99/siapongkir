<?php

namespace App\Http\Controllers;

use App\Pemasukan;
use App\Pengeluaran;
use App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Providers\AppServiceProvider;
class HomeController extends Controller
{

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Show the application dashboard.
    *
    * @return \xyind\Http\Response
    */
    public function index()
    {
        return view('home');
    }

    public function pemasukan($id = '')
    {
        $data = Pemasukan::orderBy('id_pemasukan', 'DESC')->paginate(20);
        return view('pemasukan', compact(['data']) ); 
    }

    public function pengeluaran()
    {
        $data = Pengeluaran::orderBy('id_pengeluaran', 'DESC')->paginate(20);
        return view('pengeluaran', compact(['data']) ); 
    }

    public function report()
    {
        echo "x";
    }
}