<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function () {

    $username="hadijaman";
    $name="hadi";
    $cell="01746686868";
    $email="hadijaman@gmail.com";
    $bestname="rowza";
    $salary="70k";
    $salecommission="100";


    $personinfos = array(
        'key' => 'value',
        'username' => "hadijaman",
        'name' => "hadi",
        'email' => 'hadijaman@gmail.com',
        'bestname'=> array(
            'bName' => "rowza",
            'madrasha_name' => "baitul mamur alim madrasha",
            'class' => 'one'
        ),
        'salary' => "70"

    );
    return view('contact',compact('personinfos'));



//   $personinfos=  array("hadijaman","01746686868","test","hadijaman@gmail.com","rowza","70k","100");
//     return view('contact',compact('personinfos'));

  // indexing
    // associative
    // multidimentional

    // 6 way data pass view from blade

    // return view('contact')->with('username',$username);

    // return view('contact')->with('username',$username)->with('cell',$cell);



});


Route::get('/about', function () {
    $personinfos = array(
        'key' => 'value',
        'username' => "hadijaman",
        'name' => "hadi",
        'email' => 'hadijaman@gmail.com',

    );
    //$personinfos=  array("hadijaman","01746686868","test","hadijaman@gmail.com","rowza","70k","100");

    return view('about',['personinfos' => $personinfos]);
    // return view('about',['name' => $username]);
});

Route::get('/blog', function () {
    return view('blog');
});

/*

1.route methods //
2.route parameters (

required
optional
reqular expression
)

3.Name Routes
4.Groups Route
5. Route Model Binding
6. Route Caching
7. Route Prefixes
8. Sub-domain Routing
9. Route Name Prefixes
10. Route Fallbacks
11. CSRF Protection
12. Route Model Binding Customization





*/




