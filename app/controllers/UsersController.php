<?php


class UsersController extends BaseController {

    public function getLogin()
    {
        if (Session::has('instagram_access_token'))
            Session::forget('instagram_access_token');

        Instagram::authorize();
    }

    public function getAuthorize()
    {
        Session::put('instagram_access_token', Instagram::getAccessToken(Input::get('code')));

        return Redirect::to('/');
    }

    public function getLogout()
    {
        Session::forget('instagram_access_token');

        return Redirect::to('/');
    }
} 