<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:product.create')->only('index', 'show');
        $this->middleware('can:product.list')->only('create', 'store');
        $this->middleware('can:product.delete')->only('destroy');
        $this->middleware('can:product.update')->only('edit', 'update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $op = $request->get('op');

        //echo $op;
        if ($op != null) {
            if ($op == 'active')
                $cardList = Card::where('card_status', '=', 1)->get();
            if ($op == 'unactive')
                $cardList = Card::where('card_status', '=', 0)->get();
            if ($op == 'balance')
                $cardList = Card::where('card_credit', '>', 0)->get();
        } else {
            $cardList = Card::all();
        }
        return view('card.list', compact('cardList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }
}
