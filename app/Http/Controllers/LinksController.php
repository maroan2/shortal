<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelinksRequest;
use App\Models\Links;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('links.index');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelinksRequest $request)
    {
        $attributes = $request->validate([
            'url' => ['required', 'active_url'],
        ]);

        $short_url = fake()->regexify("[a-z0-9]{6}");

        $attributes['short_url'] = $short_url;

        $link = Links::create($attributes);

        return redirect("/link/$short_url");
    }

    public function view(links $links)
    {
        return view('links.view', ['link' => $links]);
    }

    /**
     * Display the specified resource.
     */
    public function show(links $links)
    {

        $metaData = getMetaData($links->url);

        return view('links.show', [
            'longUrl' => $links->url,
            'title' => $metaData['title'],
            'description' => $metaData['description'],
            'image' => $metaData['image'],
        ]);
    }
}

function getMetaData($url)
{
    $client = new Client();
    $response = $client->request('GET', $url);
    $html = (string) $response->getBody();

    $crawler = new Crawler($html);

    // Get the title
    $title = $crawler->filter('title')->count() ? $crawler->filter('title')->text() : '';

    // Get the description
    $description = '';
    $crawler->filter('meta[name="description"]')->each(function (Crawler $node) use (&$description) {
        $description = $node->attr('content');
    });

    // Get the image
    $image = '';
    $crawler->filter('meta[property="og:image"]')->each(function (Crawler $node) use (&$image) {
        $image = $node->attr('content');
    });

    return [
        'title' => $title,
        'description' => $description,
        'image' => $image,
    ];
}
