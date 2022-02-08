<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }




    // Авторизація

    public function logout(Request $request)
    {
        $request->session()->forget('is_auth');
        $request->session()->forget('login');
        $request->session()->forget('password');
        return redirect('/admin');
    }

    public function login_post(Request $request)
    {
        $login = 'admin';
        $password = 'admin123';


        if ($_POST['login'] == 'admin' && $_POST['password'] == $password) {
            $request->session()->put('is_auth', 'true');
            $request->session()->put('login', $_POST['login']);
            $request->session()->put('password', $_POST['password']);
            $request->session()->flash('message', 'Успішна авторизація');
        } else {
            $request->session()->flash('message', 'Невірний логін чи пароль');
        }
        return redirect('/admin');
    }




    // Редагування Сайт

    public function redSite()
    {
        $site = Site::all()->first();
        return view('admin.redSite', compact('site'));
    }

    public function redSite_post(Request $request)
    {
        $site = Site::find(1);
        $input = $request->all();
        $site->fill($input)->save();
        return back()->with('message', 'Успішно відредаговано');
    }






    // Портфоліо

    public function portfolio_all()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio', compact('portfolios'));
    }

    public function edit_portfolio($id)
    {
        $portfolio = Portfolio::find($id);
        return view('admin.edit_portfolio', compact('portfolio'));
    }

    public function edit_portfolio_post($id, Request $request)
    {
        $site = Portfolio::find($id);
        $input = $request->all();
        $site->fill($input)->save();
        return back()->with('message', 'Успішно відредаговано');
    }


    public function add_portfolio()
    {
        return view('admin.add_portfolio');
    }





    public function add_portfolio_post(Request $request)
    {
        if (!$request->has('image')) {
            return response()->json(['message' => 'Missing file'], 422);
        }
        $portfolio = Portfolio::create($request->all());

        // Отримую файл із $request
        $file = $request->file('image');
        // Створюю ім'я
        $fileName = time() . '.' . $file->extension();
        // Копіюю файл (звідкіля, під яким ім'ям)
        $file->move(public_path('images'), $fileName);
        // Присвоюю ім'я
        $portfolio->image = $fileName;
        // Зберігаю
        $portfolio->save();

        return redirect()->route('portfolio.all');
    }






    public function portfolio_destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();

        return redirect()->route('portfolio.all');
    }
}
