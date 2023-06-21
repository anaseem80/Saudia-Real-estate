<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function store(Request $request, Property $property)
    {
        $user = Auth::user();

        // Check if the user has already rated the property
        if ($user->ratings()->where('property_id', $property->id)->exists()) {
            return back()->with('error', 'You have already rated this property.');
        }

        // Create a new rating
        $rating = new Rating();
        $rating->user_id = $user->id;
        $rating->property_id = $property->id;
        $rating->save();

        return back()->with('success', 'Rating added successfully.');
    }
}
