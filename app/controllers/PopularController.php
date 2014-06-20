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

    protected $auth_config = array(
        'client_id'     => Helper::CLIENT_ID,
        'client_secret' => Helper::CLIENT_SECRET,
        'redirect_uri'  => Helper::REDIRECT_URI,
        'scope'         => array('likes', 'comments', 'relationships')
    );

//    public function getAccessToken($code)
//    {
//        $apiData = array(
//            'client_id'       => $this->auth_config['client_id'],
//            'client_secret'   => $this->auth_config['client_secret'],
//            'grant_type'      => 'authorization_code',
//            'redirect_uri'    => $this->auth_config['redirect_uri'],
//            'code'            => $code
//        );
//
//        $apiHost = 'https://api.instagram.com/oauth/access_token';
//
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, $apiHost);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($apiData));
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        $jsonData = curl_exec($ch);
//        curl_close($ch);
//
//        $json_auth_token = $this->getAccessToken($_GET['code']);
//
//        $auth_token = json_decode($json_auth_token);
//
//        return $auth_token;
//    }

    public function login()
    {
        return "<a href='/'>back</a>";
    }

    public function show()
    {
        $client = new Guzzle\Service\Client('https://api.instagram.com/');

        $response = $client->get("v1/media/popular?client_id=".Helper::CLIENT_ID)->send();

        $result = $response->json();

        return View::make('popular', ['result' => $result['data']]);


    }
} 