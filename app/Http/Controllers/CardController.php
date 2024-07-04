<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use App\Models\Card;
use App\Models\Cat;
use App\Models\Status;

use App\CardView;

class CardController extends Controller
{
    public function index()
    {
        $card = Card::whereNull('deleted_at')->count();
        $cat = Cat::count();
        $quarantine = Card::where('status_id', 2)->count();
        $archive = Card::whereNotNull('deleted_at')->count();

        $status = Status::get();

        $cards = CardView::paginate(10);

        return view('card.index', compact('cards', 'card', 'cat', 'quarantine', 'archive', 'status'));
    }

    public function edit(Request $request)
    {
        $card = array();
        
        if($request->id) {
            $card = Card::find($request->id)->first();
        }

        return view('card.edit', compact('card'));
    }
}
