<?php


class PopularController extends BaseController {

    public function show()
    {

        $client = new Guzzle\Service\Client('https://api.instagram.com/');

        $response = $client->get("v1/media/popular?client_id=".Helper::CLIENT_ID)->send();

        $result = $response->json();

        return View::make('popular', ['result' => $result['data']]);
    }
} 