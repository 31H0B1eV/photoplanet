<?php

class PopularController extends BaseController {

    /**
     * Access token request/response example
     *  curl \-F 'client_id=cc217dda7dda45178e1a83594eb7db8e' \                                                                                                                             instagram-api-v0.0.1 * ] 6:09 PM
    -F 'client_secret=8458182fea814756bfad6e77a4bd26a5' \
    -F 'grant_type=authorization_code' \
    -F 'redirect_uri=http://photoplanet.dev:8000/' \
    -F 'code=98578b6b71ca47388cb7dc405e4e06ea' \https://api.instagram.com/oauth/access_token
     *
     *
    {"access_token":"644521835.cc217dd.7523cc03f06148ebac5ba79955a70a1f",
     * "user":{"username":"artemzinoviev","bio":"","website":"",
     * "profile_picture":"http:\/\/images.ak.instagram.com\/profiles\/profile_644521835_75sq_1392765666.jpg",
     * "full_name":"Artem","id":"644521835"}}%
     */

    public $auth_config = array(
        'client_id'     => Helper::CLIENT_ID,
        'client_secret' => Helper::CLIENT_SECRET,
        'redirect_uri'  => Helper::REDIRECT_URI,
        'scope'         => array('likes', 'comments', 'relationships')
    );

    public function show()
    {

        $client = new Guzzle\Service\Client('https://api.instagram.com/');

        $response = $client->get("v1/media/popular?client_id=".Helper::CLIENT_ID)->send();

        $result = $response->json();


        $instagram = new Instagram\Instagram;
        $instagram->setAccessToken('644521835.cc217dd.7523cc03f06148ebac5ba79955a70a1f');

        $current_user = $instagram->getCurrentUser();

        return View::make('popular', ['result' => $result['data'], 'current_user' => $current_user]);
    }

    public function login()
    {

        $auth = new Instagram\Auth( $this->auth_config );

        $auth->authorize();

        Session::put('instagram_access_token', $auth->getAccessToken( $_GET['code'] ));

        $this->show();
    }
} 