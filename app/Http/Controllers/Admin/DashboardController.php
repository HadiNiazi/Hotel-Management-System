<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function viewAllListing()
    {
        return view('admin.listing.index');
    }
    public function viewAllRoommate()
    {
        return view('admin.roommate.index');
    }
}
