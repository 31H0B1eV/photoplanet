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
        $article = Article::where('id', '<', 1000000)->paginate(5);

        return $article;
    }
} 