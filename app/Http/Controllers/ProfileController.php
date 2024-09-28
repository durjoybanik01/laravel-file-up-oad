<?php

namespace App\Http\Controllers;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables with the given values
        $name = "Donal Trump";
        $age = "75";

        // Create an associative array with the declared variables
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Set the cookie with the provided details
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Create the cookie
        $cookie = cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        // Return the response with status code 200 and the cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
