<?php
/**
 * Created by PhpStorm.
 * User: arzinoviev
 * Date: 6/17/14
 * Time: 2:48 PM
 */

class Article extends Eloquent {

    protected $table = 'articles';

    public static function show()
    {
        $article = Article::paginate(3);

        return $article;
    }
} 