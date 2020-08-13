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

        usort($news, function($a, $b) {
            $t1 = strtotime($a->created_at);
            $t2 = strtotime($b->created_at);
            return $t2 - $t1;
        });

        array_splice($news, 10);

        return view('home', array(
            'news' => $news
        ));
    }
}
