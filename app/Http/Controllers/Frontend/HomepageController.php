<?php

    namespace App\Http\Controllers\Frontend;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\Http\Requests;

    class HomepageController extends Controller
    {

      public function autocomplete(){
        return response()->json([
          "results"=> [
            [
              "title"=> "Result Title",
              "url"=> "/optional/url/on/click",
              "description"=> "Optional Description",
              'image' => 'fox_unsplash.jpg'
            ],
            [
              "title"=> "Result Title",
              "url"=> "/optional/url/on/click",
              "description"=> "Optional Description",
              'image' => 'fox_unsplash.jpeg'
            ],
            [
              "title"=> "Result Title",
              "url"=> "/optional/url/on/click",
              "description"=> "Optional Description",
              'image' => 'fox_unsplash.jpeg'
            ],
            [
              "title"=> "Result Title",
              "url"=> "/optional/url/on/click",
              "description"=> "Optional Description",
              'image' => 'fox_unsplash.jpeg'
            ],
          ],
          // optional action below results
          "action"=> [
            "url"=> '/path/to/results',
            "text"=> "View all 202 results"
          ],
        ]);
        return response()->json(['searched for'=>$request->input('q')]);
      }

      public function index(){
          $articles = [
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
            'image' => 'fox_unsplash.jpeg'
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
            'image' => 'fox_unsplash.jpeg'
          ],
          [
            'title' => 'Result Title',
                      'body' => 'Lorem ipsum',
              'author' => 'John Doe',
            'image' => 'fox_unsplash.jpeg'
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
            'image' => 'fox_unsplash.jpeg'
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
            'image' => 'fox_unsplash.jpeg'
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
            'image' => 'fox_unsplash.jpeg'
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
            'image' => 'fox_unsplash.jpeg'
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
            'image' => 'fox_unsplash.jpeg'
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
            'image' => 'fox_unsplash.jpeg'
          ],


        ];
        return view('index', compact('articles'));
      }

      public function about(){
        $articles = [
          [
                  'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
          ],
          [
            'title' => 'Result Title',
            'body' => 'Lorem ipsum',
            'author' => 'John Doe',
          ],


        ];
        return view('frontend.about', compact('articles'));
      }

      public function contact(){
          return view('frontend.contact');
      }

      public function search(){
        return view('frontend.search');
      }

      public function terms(){
        return view('welcome');
      }
    }