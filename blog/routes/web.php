<?php



use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/say', function () {
//     return "Hello";
// });


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/users", function () {
//     return json_encode(
//         [
//             [
//                 "id" => 1,
//                 "name" => "ali"
//             ],
//             [
//                 "id" => 2,
//                 "name" => "ahmad"
//             ]
//         ]
//     );
// });

// Route::get("/users/{id}", "UsersController@show")->name("users.show");

// Route::get("/", function () {
//     return view("welcome");
// });

// Route::get("/user/{id}", function (int $id) {
//     return $id;
// })->name("testname");


// Route::match(["get", "post"], "/", function () {
//     return json_encode(["key" => "value"]);
// });

// Route::any("/users/{id}", function ($id) {
//     return json_encode(["id" => $id]);
// });


// Route::any("/users/{id}", function (int $id) {
//     return json_encode(["message" => "your id is $id"]);
// })->where("id", "[1-9]");


// Route::middleware("auth")->group(function () {
//     Route::get(
//         "users",
//         function () {
//             return "hello from users function";
//         }
//     );

//     Route::get(
//         "admin",
//         function () {
//             return "hello from admin function";
//         }
//     );
// });
// Route::group([], function () {
//     Route::get(
//         "users",
//         function () {
//             return "hello from users function";
//         }
//     );

//     Route::get(
//         "admin",
//         function () {
//             return "hello from admin function";
//         }
//     );
// });



// grouping routes with prefix

// Route::prefix("dashboard")->group(function () {
//     Route::get("/", function () {
//         return "<h1>main dashboard</h1>";
//     });

//     Route::get(
//         "edit",
//         function () {
//             return "<h1>there is edit page from dashboard</h1>";
//         }
//     );
// });


// in another form

// Route::group(["prefix" => "dashboard"], function () {
//     Route::get(
//         "/",
//         function () {
//             return "<h1>main dashboard</h1>";
//         }
//     );

//     Route::get(
//         "edit",
//         function () {
//             return "<h1>there is edit page from dashboard</h1>";
//         }
//     );
// });

// Route::get("/", function () {
//     return view("home")->with("number", rand(1, 9999));
// });

// Route::get("/dashboard", [dashboardController::class, "index"]);
// Route::get("/", 'App\Http\Controllers\dashboardController@index');


// Route::get("/dashboard", "App\Http\Controllers\DashboardController@index");
// Route::get("/dashboard/create", "App\Http\Controllers\DashboardController@create");
// Route::post("/dashboard", "App\Http\Controllers\DashboardController@store");
// Route::get("/dashboard/show/{id}", "App\Http\Controllers\DashboardController@show");
// Route::get("/dashboard/edit/{id}", "App\Http\Controllers\DashboardController@edit");
// Route::put("/dashboard/update/{id}", "App\Http\Controllers\DashboardController@update");
// Route::delete("/dashboard/destroy/{id}", "App\Http\Controllers\DashboardController@destroy");

# above codes is equal to below code :))))

// Route::resource("/dashboard", "App\Http\Controllers\DashboardController");


// Route::fallback(function () {
//     return view("_404");
// });

// Route::get("dashboard/{id}", "App\Http\Controllers\showDashboard");

// Route::get("dashboard", "App\Http\Controllers\showDashboard");


// Route::resource("dashboard", "App\Http\Controllers\DashboardController");


// Route::get("redirect-me", function () {
//     return redirect()->to("dashboard/create");
// });


// Route::get("redirect-short", function () {
//     return redirect("dashboard");
// });


// Route::get("dashboardo", function () {
//     return Redirect::route("dashboard.show",[1]);
// });


// Route::get("redirect", function () {
//     return redirect()->back();
// });


// Route::get("redirect", function () {
//     return redirect("dashboard/create")->with("status", true);
// });


// Route::get("/{username}", function ($username) {
//     return $username;
// })->where("username", "[a-zA-Z]+");


// Route::get("start", function () {
//     return view("welcome");
// })->name("start");

// Route::get("/get/test/user/{id}", function ($id) {
//     return $id;
// })->name("get.test.user");

// Route::group([""], function () {
//     Route::get("/", function () {
//     });
// });

// Route::prefix('admin')->group(function () {
//     Route::get('users/{id}', function (int $id) {
//         // Matches The "/admin/users" URL

//         return "here admin/users";
//     })->where("id", "[0-9]{5}");
// });

// Route::name("admin.")->group(function () {
//     Route::get("users", function () {
//         return "hello";
//     })->name("users");
// });

// Route::get("/", function () {
//     return view("welcome");
// });


// $router->get("/", function () {
//     return "home page";
// });

// Route::apiResource("/post", "App\Http\Controllers\PostController");


// Route::redirect("/redirect", "post");


Route::get("/post", "App\Http\Controllers\PostController@index")->name("post.index");


Route::get("/file", "App\Http\Controllers\PostController@create")->name("file.create");
