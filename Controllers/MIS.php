<?php

namespace App\Controllers;

class MIS extends BaseController
{
    public function Dashboard()
    {
        return view('view_dashboard');
    }

    public function Residents_Profile()
    {
        return view('view_residents_profile');

    }
    
    public function Officials_Profile()
    {
        return view('view_officials_profile');

    }

    public function Events()
    {
        return view('view_events');

    }

    public function Mapping()
    {
        return view('view_mapping');

    }


}
