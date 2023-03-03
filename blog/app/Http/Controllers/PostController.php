<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($username)
    {
        // $result = DB::table('posts')->where("created_at", now())->get();

        // // return response()->json($result);

        // $email = DB::table("users")->where("name", "john")->value("email");

        // $name = DB::table("posts")->where("title", "how create laravel blog")->value("name");

        // $userWithId3 = DB::table("users")->find(3);

        // $postId100 = DB::table("posts")->find(100);

        // $usernames = DB::table("users")->pluck("username");

        // foreach ($usernames as $username) {
        //     echo $username;
        // }

        // $usernames = DB::table("users")->pluck("username", "name");

        // foreach ($usernames as $name => $username) {
        //     echo $name . " " . $username;
        // }

        // $resultOfJoin = DB::table("posts")->join("users", "users.id", "posts.user_id")->get();

        // dd($resultOfJoin);

        // // unions

        // $first = DB::table("users")->whereNull("email");

        // $second = DB::table("users")->whereNotNull("address")->union($first)->get();


        // // order by


        // $users = DB::table("users")->groupBy("country_code")->select("country_code", DB::raw("count * as total"))->get();


        // $result = DB::table("users")->when(true, function ($query) {
        //     return $query->where("id", ">", 120);
        // })->get();

        // this query will get first of all of them 

        // i am here

        // can you tell me something for create a new website
        // i want to help you in this case you shold create you own wordpress application

        // $users = DB::table("posts")->select("content", "author as writer")->get();
        // dd($users);

        // $user = DB::table("posts")->where("author", $username)->get();
        // $user = Post::where("content", "content1")->get();

        // $user->fresh();

        // dd($user);

        // $users = Post::where("created_at", "<", now())->cursor();

        // dd($users);

        // Post::create([
        //     "title" => "title1",
        //     "content" => "content1"
        // ]);

        // Post::make([
        //     "content" => "this is content"
        // ])->save();

        // $resultOfCreate = Post::create([
        //     "description" => Str::random(20),
        //     "content" => Str::random(100),
        //     "author" => Str::random(10)
        // ]);
        // dd($resultOfCreate);

        // Post::destroy([1, 2, 3, 4, 5, 6, 7]);

        // Post::where("user_id", 100)->delete();

        // Post::where("id", 1)->delete(); recent

        // $posts = Post::all(); just not deleted rows

        // $posts = Post::withTrashed()->get();

        // $posts = Post::onlyTrashed()->get();

        // dd($posts);

        // Post::onlyTrashed()->restore();

        // $posts = Post::all();
        // dd($posts);

        // $posts = Post::all();

        // dd($posts[1]->title_content);

        // $user = User::find(1);
        // $course = Course::find(1);

        // dd($course->comments);


        ##### lazy loading #####

        $courses = Course::all();

        $array = [];
        foreach ($courses as $course) {
            $array[] = $course->comments;
        }


        ##### eager loading #####

        $courses = Course::with("comments")->get();
    }

    public function errors()
    {
        // dd("hello"); test is ok

        // $messages = [
        //     "errors" => ["ERROR IS HERE"],
        //     "messages" => ["SOME MESSAGE"]
        // ];

        // $messageBage = new \Illuminate\Support\MessageBag($messages);

        // if ($messageBage->has("errors")) {
        //     // dd($messageBage->get("errors"));

        //     return view("error")->withErrors($messageBage);
        // }

        ### with $errors we do not need to do all of this works myself. all of this works will be done themself with laravel



        return view("error")->withErrors([
            "firstError" => "error 1",
            "secondError" => "error 2"
        ]);
    }
}
