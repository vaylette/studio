<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function uploadVideo(Request $request)
   {
      $this->validate($request, [
         'title' => 'required|string|max:255',
         'video' => 'required|file|mimetypes:video/mp4',
   ]);
   $video = new Video;
   $video->title = $request->title;
   if ($request->hasFile('video'))
   {
     $path = $request->file('video')->store('videos', ['disk' =>      'my_files']);
    $video->video = $path;
   }
   $video->save();
   
  }
}
