<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Riadha\Profiles\ProfilesManager;
use Illuminate\Support\Facades\Storage;

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

        if ($request->has('profile_pic')){
            $str = $request->profile_pic['dataUrl'];

            $data = explode( ',', $str );

            $filename = uniqid() . $request->profile_pic['info']['name'];

            $file = Storage::put($filename, base64_decode($data[1]));

            $contents = Storage::get($filename);

            $profile->profilephoto = $contents;
            $profile->save();

            Storage::delete($filename);
        }

        return response()->json($profile, 200);
    }

    /**
     * Get a list of profiles
     */
    public function index() {
        return response()->json($this->manager->index(),200);
    }
}
