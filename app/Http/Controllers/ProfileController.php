<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Riadha\Profiles\ProfilesManager;

class ProfileController extends Controller
{
    /**
     * @var ProfilesManager
     */
    protected $manager;

    function __construct()
    {
        $this->manager = new ProfilesManager();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($country, $id, $name)
    {
        $profile = $this->manager->findBySlug('/' . request()->path());

        if ($profile){
            return view('profile.show')->with([
                'profile' => $profile
            ]);
        } else {
            app()->abort(404);
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
