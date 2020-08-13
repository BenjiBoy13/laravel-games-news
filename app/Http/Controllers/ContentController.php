<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;
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
     * @param Request $request
     * @return Application|Factory|View
     */
    public function searchAction(Request $request)
    {
        $text = $request->query->get('text');
        $textToSearch = "%" . $text . "%";

        $news = DB::select(
            "select * from news where title like :text",
            array('text' => $textToSearch)
        );

        usort($news, function($a, $b) {
            $t1 = strtotime($a->created_at);
            $t2 = strtotime($b->created_at);
            return $t2 - $t1;
        });

        return view('search', array(
            'news' => $news,
            'text' => $text,
            'count' => count($news)
        ));
    }
}
