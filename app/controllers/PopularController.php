<?php


class PopularController extends BaseController {

    const CLIENT_ID = 'cc217dda7dda45178e1a83594eb7db8e';
//    const OAUTH_URL = 'https://instagram.com/oauth/authorize/?client_id=cc217dda7dda45178e1a83594eb7db8e&redirect_uri=http://photoplanet.dev:8000/&response_type=code';

    public function show()
    {

        $client = new Guzzle\Service\Client('https://api.instagram.com/');

        $response = $client->get("v1/media/popular?client_id=".$this::CLIENT_ID)->send();

        $result = $response->json();

        return View::make('popular', ['result' => $result['data']]);
    }
} 