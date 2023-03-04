<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
class PortfolioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porfolioes=Portfolio::all();
        return view('portfolio.index',compact('porfolioes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
            // Handle File Upload
            if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/client_cover_images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }

            // Create Portfolio
            $portfolio = new Portfolio;
            $portfolio->name = $request->input('name');
            $portfolio->body_description = $request->input('body_description');
            $portfolio->client = $request->input('client');
            $portfolio->inc = $request->input('in');
            $portfolio->url = $request->input('url');
            $portfolio->proj_description = $request->input('proj_description');
            $portfolio->cover_image = $fileNameToStore;       
            $portfolio->save();
            $sucessMsg='The '.$request->input('name').' client has been successfully created!';
            return redirect('/PortfolioSection')->with('success',$sucessMsg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients=Portfolio::find($id);
        return view('portfolio.edit')->with('clients',$clients);
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
        $this->validate($request, [
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
            // Handle File Upload
            if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/client_cover_images', $fileNameToStore);
            }

            // Update Portfolio
            $portfolio = Portfolio::find($id);
            $portfolio->name = $request->input('name');
            $portfolio->body_description = $request->input('body_description');
            $portfolio->client = $request->input('client');
            $portfolio->inc = $request->input('in');
            $portfolio->url = $request->input('url');
            $portfolio->proj_description = $request->input('proj_description');
            if($request->hasFile('cover_image')){
                $portfolio->cover_image = $fileNameToStore; 
            }      
            $portfolio->save();
            $sucessMsg='The '.$request->input('name').' client has been successfully updated!';
            return redirect('/PortfolioSection')->with('success',$sucessMsg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio =Portfolio::find($id);
        $getclient=$portfolio->name;
        if($portfolio->cover_image != 'noimage.jpg'){
            Storage::delete('public/client_cover_images/'.$portfolio->cover_image);
        }
        $portfolio->delete();
        $sucessMsg='The '.$getclient.' client record has been deleted!';        
        return redirect('/PortfolioSection')->with('success', $sucessMsg);
    }
}
