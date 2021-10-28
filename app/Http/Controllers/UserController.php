<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:user.create')->only('index', 'show');
        $this->middleware('can:user.list')->only('create', 'store');
        $this->middleware('can:user.delete')->only('destroy');
        $this->middleware('can:user.update')->only('edit', 'update');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userList = User::all();
        return view('user.list', compact('userList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->document = $request->get('document');
        $user->name = $request->get('name');
        $user->address = $request->get('address');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->password = Hash::make($request->get('password'));

        $user->assignRole($request->get('rol'));
        try {
            if ($user->save()) {
                return redirect()->route('users.index');
            } else {

                return redirect()->route('users.create');
            }
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $cardList = Card::where('user_id', '=', $id)->get();
        return view('user.view', compact('user', 'cardList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
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
        $user = new User;
        $user = User::findOrFail($id);
        $user->document = $request->get('document');
        $user->name = $request->get('name');
        $user->address = $request->get('address');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        if ($request->get('password'))
            $user->password = Hash::make($request->get('password'));

        $user->assignRole($request->get('rol'));
        try {
            if ($user->save()) {
                return redirect()->route('users.index');
            } else {

                return redirect()->route('users.create');
            }
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        User::destroy($id);
        return  redirect()->route('users.index');
    }
}
