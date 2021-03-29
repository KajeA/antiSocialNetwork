<?php


        namespace App\Http\Controllers;

        class HomeController extends Controller

        {
            public function _construct()
            {
                $this->middleware('auth');
            }

            public function index()
            {
                return view('posts.index', [
                    'posts' => current_user()->timeline()
                ]);
            }
        }
