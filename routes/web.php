<?php

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

Route::get('/', function () {
    $helloworld = 'Hello World';
    return view('welcome', compact('helloworld'));
});

Route::get('/model', function () {
    // ---------------------- Active records ------------------------

    // $products = \App\Product::all();
    // $user = new \App\User();
    // $user = \App\User::find(1);
    // $user->name='Usuario Teste';
    // $user->email='email@teste.com';
    // $user->password=bcrypt('12345678');
    // $user->save();

    // \App\User::all(); = retorna todos os usuarios
    // \App\User::find(3); = retornar um unico usuario com o id
    // \App\User::where('email', 'email@teste.com')->first(); = fazer um where e retorna apenas o primeiro resultado
    // \App\User::paginate(10); = trás resultados paginados

    // ---------------------- Mass Assignment ------------------------

    // $user = \App\User::create([
    //     'name' => 'Nanderson Castro 2',
    //     'email' => 'email1000@email.com',
    //     'password' => bcrypt('teste123')
    // ]);

    // ---------------------- Mass Update ------------------------

    // $user = \App\User::find(84);
    // $user->update([
    //     'name' => 'Atualizado com Mass Update'
    // ]);

    // dd($user);

    return \App\User::all(); 
});