<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;

use App\Models\Pet;
use App\Models\Type;
use App\Models\Status;
use App\Models\Gender;
use App\Models\Age;
use App\Models\Color;
use App\Models\PetColor;
use App\Models\Breed;
use App\Models\User;

use App\ViewPet;
use App\ViewPetColor;

class PetController extends Controller
{
    public function index()
    {
        $title = 'Питомцы';

        $pet = Pet::count();
        $quarantine = Pet::where('status_id', 2)->count();
        $archive = Pet::where('status_id', 4)->count();

        $status = Status::get();

        // $cats = Cat::whereNull('card_id')->orderBy('name')->orderBy('id', 'desc')->get();

        $pets = ViewPet::paginate(10);

        return view('pet.index', compact('title', 'pets', 'pet', 'quarantine', 'archive', 'status'));
    }

    public function update(Request $request)
    {
        $pet = array();
        $colors = array();
        $name_colors = array();

        $title = 'Создание карточки питомца';
        
        if($request->id) {
            $title = 'Редактирование карточки питомца';
            $pet = Pet::find($request->id);
            $_colors = ViewPetColor::where('pet_id', $pet->id)->get();
            $_name_colors = array();
            
            foreach ($_colors as $value) {
                $colors[] = $value->color_id;
                $_name_colors[] = $value->name;
                $name_colors = implode(", ", $_name_colors);
            }
        }

        $types = Type::get();
        $genders = Gender::get();
        $ages = Age::get();
        $pet_color = Color::get();
        $breeds = Breed::get();
        $users = User::get();

        return view('pet.update', compact('title', 'pet', 'types', 'genders', 'ages', 'pet_color', 'colors', 'name_colors', 'breeds', 'users'));
    }

    public function send(Request $request)
    {
        if($request->id) {
            $pet = Pet::find($request->id);
            
        } else {
            $pet = new Pet;
        }

        if($request->image) {
            $imageName = Str::uuid().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $pet->photo_src = $imageName;
        }

        $pet->name = $request->name;
        $pet->type_id = $request->type_id;
        $pet->age_id = $request->age_id;
        $pet->age_value = $request->age_value;
        $pet->breed_id = $request->breed_id;
        $pet->gender_id = $request->gender_id;
        $pet->status_id = $request->status_id;
        $pet->author_id = Auth::id();
        $pet->responsible_id = $request->responsible_id;
        
        $pet->save();

        if($request->id) {
            PetColor::where('pet_id', $request->id)->delete();
        }

        foreach ($request->color as $color) {
            $pet_color = new PetColor;
            $pet_color->color_id = $color;
            $pet_color->pet_id = $pet->id;
            $pet_color->save();
        }

        return redirect()->route('pet.view', ['id' => $pet->id]);
    }

    public function view(Request $request)
    {
        $title = 'Карточка питомца';

        $pet = ViewPet::find($request->id);

        return view('pet.view', compact('title', 'pet'));
    }

    public function delete(Request $request)
    {
        return;
    }

    public function toArchive(Request $request)
    {
        return;
    }
}
