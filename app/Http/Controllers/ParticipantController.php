<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\ParticipantChoice;
use App\Models\Category;

class ParticipantController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('participant.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:10',
            'gender' => 'required|in:male,female',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id'
        ]);

        $participant = Participant::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender
        ]);


        foreach ($request->categories as $categoryId) {
            ParticipantChoice::create([
                'participant_id' => $participant->id,
                'category_id' => $categoryId
            ]);
        }

        $firstCategory = ParticipantChoice::where('participant_id', $participant->id)->first();


        if (!$firstCategory) {
            return redirect()->route('dashboard')->with('error', 'Peserta tidak memiliki kategori soal.');
        }

        return redirect()->route('test.instructions', [
            'participantId' => $participant->id,
            'categoryId' => $firstCategory->category_id
        ]);
    }

    public function show($id)
    {
        $participant = Participant::with('choices.category')->findOrFail($id);
        return view('participant.show', compact('participant'));
    }

    public function destroy($id)
    {
        $participant = Participant::findOrFail($id);
        $participant->delete();

        return redirect()->route('overview.index')->with('success', 'Peserta berhasil dihapus');
    }
}
