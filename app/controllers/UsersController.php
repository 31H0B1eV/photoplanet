<?php


class UsersController extends BaseController {

    public function getLogin()
    {
        if (Session::has(Config::get('instagram::session_name')))
            Session::forget(Config::get('instagram::session_name'));

        Instagram::authorize();
    }

    public function getAuthorize()
    {
        Session::put(Config::get('instagram::session_name'), Instagram::getAccessToken(Input::get('code')));

        return Redirect::to('/');
    }

    public function getLogout()
    {
        Session::forget(Config::get('instagram::session_name'));

        return Redirect::to('/');
    }
} 