<?php

namespace App\Http\Controllers;

use App\Models\DiaryEntry;
use App\Models\Emotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GetConflictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the paginated diary entries with their associated emotions
        $entries = Auth::user()->diaryEntries()->with('emotions')->paginate(3);
        
        // Get the logged-in user ID
        $userId = Auth::id();
        
        $content = DB::table('diary_entries as de')
            ->join('diary_entry_emotions as dee', 'de.id', '=', 'dee.diary_entry_id')
            ->join('emotions as emo', 'dee.emotion_id', '=', 'emo.id')
            ->where('de.user_id', $userId)
            ->where('dee.emotion_id', 2)
            ->where('de.content', 'like', '%happy%')
            ->select('de.user_id', 'dee.created_at', 'de.content', 'emo.name', 'dee.intensity')
            ->get();
        return view('get_conflict.index', compact('content'));
    }

}
