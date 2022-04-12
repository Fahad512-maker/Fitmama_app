<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package=Package::get();
        $data=['page_title' => 'Package Lists' , 'package' => $package];
        return view('admin.package.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=['page_title' => 'Add Package'];
        return view('admin.package.create' ,$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageRequest $request)
    {
        
        $filename="";
        $filevideo="";
        if($request->hasFile('image')){
        $file=$request->image;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('package/workout_images/'), $filename);

       }

       if($request->hasFile('intro_video')){
        $file=$request->intro_video;
        $filevideo=time().'.'.$file->getClientOriginalName();
        $file->move(public_path('package/fitmama_videos/'), $filevideo);

       }
        $package=Package::create([
         
          'title' => $request->title,
          'description' => $request->description,
          'checkmark' => $request->checkmark,
          'checkmarked_description' => $request->checkmarked_description,
          'image' => 'package/workout_images/'.$filename,
          'intro_video' => 'package/fitmama_videos/'.$filevideo,
          'splitable' => 0,
          'onetime_payment_amount' => $request->onetime_payment_amount,
          'per_month_payment_amount' => $request->per_month_payment_amount,

        ]);

        if($package){
          
          return redirect(url('/packages'))->with('success' , 'New Package Added Successfully');

        }
        else
         {
            return back()->with('failed' , 'Package Added Failed');
         }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show($package_id)
    {
         $package=Package::findOrFail($package_id);
        $data=['page_title' => 'Package Preview' , 'package' => $package];
        return view('admin.package.show' , $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Package $package)
    {
        $package=Package::find($id);
        $data=['page_title' => 'Edit Package' , 'package' => $package];
        return view('admin.package.edit' , $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackageRequest  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update($id,UpdatePackageRequest $request, Package $package)
    {
       
        $package=Package::find($id);
        $package->title=$request->title;
        $package->description=$request->description;
        $package->checkmark = $request->checkmark;
        $package->checkmark_description = $request->checkmark_description;
        $package->splitable=0;
        $package->onetime_payment_amount=$request->onetime_payment_amount;
        $package->per_month_payment_amount=$request->per_month_payment_amount;
        $package->save();

        return redirect(url('/packages'))->with('success' , 'Package Update Successfully');

    }

    public function update_image($id ,UpdatePackageRequest $request)
    {

         $filename="";
         if($request->hasFile('image')){
        $file=$request->image;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('package/workout_images/'), $filename);
      } 
        $package=Package::find($id);
        $package->image='package/workout_images/'.$filename;
        $package->save();

       return redirect(url('/packages'))->with('success' , 'Package Image Update Successfully');
    }

    public function update_video($id ,UpdatePackageRequest $request)
    {
    
     $filevideo="";
       
       if($request->hasFile('intro_video')){
        $file=$request->intro_video;
        $filevideo=time().'.'.$file->getClientOriginalName();
        $file->move(public_path('package/fitmama_videos/'), $filevideo);

       }

       $package=Package::find($id);
       $package->intro_video='package/fitmama_videos/'.$filevideo;
       $package->save();

       return redirect(url('/packages'))->with('success' , 'Package Video Update Successfully');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Package $package)
    {
        $package=Package::find($id);
        $package->delete();
        return redirect(url('/packages'))->with('success' , 'Package Delete Successfully');
    }
}
