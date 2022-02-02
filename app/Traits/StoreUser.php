<?php

namespace App\Traits;

use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Arr;
use App\Models\Media;
use App\Models\User;

trait StoreUser
{
    public function store(ProfileRequest $request)
    {
        $request = $request->validated();

        if ( ! $media = $this->storePhoto($request) )
            return back()->withErrors('Photo upload failed; please retry');

        $request['role'] = $this->role;
        $request['media_id'] = $media->id;
        $request['name'] = $request['first_name'].' '.$request['last_name'];

        User::create($request);

        return back()->with('status', 'Action success');
    }

    public function storePhoto($request)
    {
        if ( $photo = Arr::get($request, 'photo') ) {
            $name = $photo->getClientOriginalName();
            $path = $photo->store('public/photos');

            return Media::create(compact('name', 'path'));
        }

        return false;
    }
}