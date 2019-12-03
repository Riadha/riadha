<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Riadha\Profiles\ProfilesManager;

class ProfileController extends Controller{
    /**
     * @var ProfilesManager
     */
    private $manager;

    function __construct()
    {
        $this->manager = new ProfilesManager();
    }

    /**
     * Create a new profile
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request){
        $this->validate($request, [
            'first_name' => 'required|max:25',
            'middle_name' => 'max:25',
            'last_name' => 'max:25',
            'country' => 'required|size:3'
        ]);

        $profile = $this->manager->create($request->all());

        if ($request->has('profile_photo')){
            $profile->profilephoto = $request->file('profile_photo');
        }

        return response()->json($profile, 200);
    }
}
