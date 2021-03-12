<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index()
    {
        $backgroundPhoto = "img/home-bg.jpg";
        $title = 'Clean Blog';
        $small = "A Blog Theme By Start Bootstrap";
        return view('index', ['title' => $title, 'small' => $small, 'backgroundPhoto' => $backgroundPhoto]);
    }

    public function aboutMe()
    {
        $backgroundPhoto = "img/about-bg.jpg";
        $title = "About Me";
        $small = "This is what I do.";
        return view('aboutme', ['title' => $title, 'small' => $small, 'backgroundPhoto' => $backgroundPhoto]);
    }

    public function sample()
    {
        $backgroundPhoto = "img/post-sample-image.jpg";
        $title = "Man must explore, and this is exploration at it's gratest";
        $subtitle = "Problems look mighty small from 150 miles up";
        $small = "Posted by Start Bootstrap on August 24, 2018";
        return view('sample', ['title' => $title, 'small' => $small, 'subtitle' => $subtitle, 'backgroundPhoto' => $backgroundPhoto]);
    }

    public function contact()
    {
        $backgroundPhoto = "img/contact-bg.jpg";
        $title = "Contact me";
        $small = "Have questions? I have answers!";
        return view('contact', ['title' => $title, 'small' => $small, 'backgroundPhoto' => $backgroundPhoto]);
    }
}