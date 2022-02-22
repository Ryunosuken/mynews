<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use Carbon\Carbon;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profile = new Profile;
        $form = $request->all();
    
        unset($form['_token']);
    
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/profile/create');
    }
    
  
    public function edit(Request $request)
    { 
  
      // News Modelからデータを取得する
      $profile = Profile::find($request->id);
     
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
    }
    
    public function update(Request $request)
   {
            $this->validate($request, Profile::$rules);
            // News Modelからデータを取得する
            $profile = Profile::find($request->id);
             // 送信されてきたフォームデータを格納する
            $Profile_form = $request->all();
                
            if ($request->remove == 'true')
                {$profile_form['image_path'] = null;
            } elseif ($request->file('image')) {
                $path = $request->file('image')->store('public/image');
                $profile_form['image_path'] = basename($path);
            } else {
                $news_form['image_path'] = $profile->image_path;
          }
            unset($profile_form['text']);
            unset($profile_form['text']);
            unset($profile_form['text']);
              // 該当するデータを上書きして保存する
            $profile->fill($profile_form)->save();
            
        $logs = new logs();
        $logs->news_id = $news->id;
        $logs->edited_at = Carbon::now();
        $logs->save();
    
    return redirect('admin/profile/edit');
    }
    
    public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $profile = Profile::find($request->id);
      // 削除する
    //   $profile->delete();
      return redirect('admin/profile/');
    }
}


