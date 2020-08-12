<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * Class ContentController
 *
 * @package App\Http\Controllers
 * @author Benjamin Gil FLores
 */
class ContentController extends Controller
{
    /**
     * @param $slug
     * @return Application|Factory|View
     */
    public function newsAction($slug)
    {
        return view('news-detail', array(
            'slug' => $slug
        ));
    }

    /**
     * @return Application|Factory|View
     */
    public function searchAction()
    {
        return view('search');
    }
}
