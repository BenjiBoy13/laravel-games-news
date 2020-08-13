<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        $slug = "/$slug";

        $note = DB::select("select * from news where url_normalized = :slug", array('slug' => $slug));

        if (empty($note)) throw new NotFoundHttpException();

        return view('news-detail', array(
            'note' => $note[0],
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
