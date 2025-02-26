<?php

Class Login extends CI_Controller {
    public function index(){
        $this->load->view('login');
    }

    public function auth(){
        $url = 'https://omdbapi.com/?apikey=da5fb80c&s=naruto';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        
        $data = json_decode($response, true);
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}