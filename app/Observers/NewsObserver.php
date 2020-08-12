<?php

namespace App\Observers;

use App\News;

/**
 * Class NewsObserver
 *
 * @package App\Observers
 * @author Benjamin Gil Flores
 */
class NewsObserver
{
    /**
     * @param News $news
     */
    public function saving(News $news)
    {
        $news->url_normalized = "/" . strtolower(str_replace(" ", "-", $news->title));
    }
}
