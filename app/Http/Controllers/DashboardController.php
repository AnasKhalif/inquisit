<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;

class DashboardController extends Controller
{
    public function index()
    {
        $participants = Participant::with('choices.category')->get();

        foreach ($participants as $participant) {
            $totalCategories = \App\Models\Category::count();
            $completedCategories = $participant->choices->count();

            $participant->progress = $totalCategories > 0 ? round(($completedCategories / $totalCategories) * 100, 2) : 0;
        }

        return view('dashboard', compact('participants'));
    }
}
