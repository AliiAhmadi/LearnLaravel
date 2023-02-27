<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

        $users = DB::table("posts")->select("content", "author as writer")->get();
        dd($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return response()->file("theory-of-languages.pdf", ["Content-Type" => "pdf"]);

        DB::transaction(function () {
            DB::table("posts")->where("id", 100)->delete();

            DB::table("posts")->insert([
                "name" => "ali",
                "family" => "ahmadi",
                "country" => "iran",
                "zip" => 100
            ]);
        });
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
