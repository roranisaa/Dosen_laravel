<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lecturer;


class UserController extends Controller
{
    
    public function getLecturers()
    {
        // Fetch all lecturers from the database
        $lecturers = Lecturer::all();

        // Return JSON response
        return response()->json([
            'success' => true,
            'data' => $lecturers,
        ]);
    }
}
