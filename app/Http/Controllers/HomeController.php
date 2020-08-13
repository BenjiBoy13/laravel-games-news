<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 * @author Benjamin Gil Flores
 */
class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function indexAction()
    {
        $news = DB::select("select * from news");

        return view('home', array(
            'news' => $news
        ));
    }
}
