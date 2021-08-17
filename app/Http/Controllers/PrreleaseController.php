<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prrelease;
use App\Models\Latestnews;
use App\Models\Event;
use App\Models\Mediaaboutus;
use App\Models\Topic;



class PrreleaseController extends Controller
{
    public function index()
    {
        return view('pressReleases', [
            'pressReleases1' => Prrelease::orderBy('id', 'desc')->first(),
            'pressReleases_rest' => Prrelease::orderBy('id', 'desc')->get()->skip(1),
            'latestNewsAll' => Latestnews::orderBy('id', 'desc')->get(),
            'eventsAll' => Event::orderBy('id', 'desc')->get(),
            'mediaAboutUsAll' => Mediaaboutus::orderBy('id', 'desc')->get(),
        ]);
    }
    public function show_one(Request $request)
    {
        $Prrelease = new Prrelease;
        return view('pr_release_separate', [
            'pr_release_data' => $Prrelease->find($request->id),
            'pr_release_rest' => $Prrelease::orderBy('id', 'desc')->where('id', '<>', $request->id)->get(),
            'pr_last_tree' => Prrelease::orderBy('id', 'desc')->take(3)->get(),
            'topics' => Topic::all(),

        ]);
    }
    public function show_one_latestNews(Request $request)
    {
        $Latestnews = new Latestnews;
        return view('latest_news_separate', [
            'latest_news_data' => $Latestnews->find($request->id),
            'latest_news_rest' => $Latestnews->where('id', '<>', $request->id)->get(),
            'latest_news_last_tree' => Latestnews::orderBy('id', 'desc')->take(3)->get(),
            'topics' => Topic::all(),

        ]);
    }

    public function show_one_event(Request $request)
    {
        $Event = new Event;
        return view('event_separate', [
            'event_data' => $Event->find($request->id),
            'events_rest' => $Event->where('id', '<>', $request->id)->get(),
            'events_last_tree' => Event::orderBy('id', 'desc')->take(3)->get(),
            'topics' => Topic::all(),

        ]);
    }

    public function show_one_med_ab_us(Request $request)
    {
        $Mediaaboutus = new Mediaaboutus;
        return view('med_ab_us_separate', [
            'med_ab_data' => $Mediaaboutus->find($request->id),
            'med_ab_rest' => $Mediaaboutus->where('id', '<>', $request->id)->get(),
            'med_ab_last_tree' => Mediaaboutus::orderBy('id', 'desc')->take(3)->get(),
            'topics' => Topic::all(),

        ]);
    }
}
