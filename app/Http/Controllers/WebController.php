<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;

class WebController extends BaseController
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => env('BE_BASEURI'),
            'timeout'  => 2.0,
        ]);
    }

    public function home()
    {
        return view('page.home.index');
    }

    public function tk()
    {
        $data = $this->getPageData('tk');
            
        return view('page.blogpage.index', $data);
    }

    public function sd()
    {
        $data = $this->getPageData('sd');
            
        return view('page.blogpage.index', $data);
    }

    public function businessunit()
    {
        $data = $this->getPageData('business_unit');
            
        return view('page.blogpage.index', $data);
    }

    public function aboutus()
    {
        $data = $this->getPageData('aboutus');
            
        return view('page.blogpage.index', $data);
    }

    public function contact()
    {
        $data['title'] = "Kontak Kami";
            
        return view('page.contact.index', $data);
    }

    public function news()
    {
        $data = $this->getNewsData();
            
        return view('page.news.index', $data);
    }

    public function registration()
    {
        $data = $this->getPageData('registration');
        $data['daftar'] = 'https://forms.gle/LHqgyWx7VgGnXE7n6';
            
        return view('page.blogpage.index', $data);
    }

    function getPageData($code) {
        $getData = $this->client->request('GET', '/blog/page/'.$code)->getBody();
        $getData = json_decode($getData);

        $result['title'] = $getData->data->title ?? "";
        $result['content'] = $getData->data->content ?? "";
        $result['tags'] = $getData->data->tags ?? "";
        $result['image'] = $getData->data->image ?? "";

        return $result;
    }

    function getNewsData() {
        $getData = $this->client->request('GET', '/blog/news')->getBody();
        $getData = json_decode($getData);

        $result['data'] = $getData->data ?? [];

        return $result;
    }
}
