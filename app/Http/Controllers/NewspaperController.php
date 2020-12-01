<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Newspaper;
use App\Services\NewspaperService;
use Illuminate\Http\Request;

class NewspaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $newspaperService;

    public function __construct(NewspaperService $newspaperService)
    {
        $this->newspaperService = $newspaperService;
    }

    public function index()
    {
        $newspapers = $this->newspaperService->getAll();
        return view('layout.admin.dashboard', compact('newspapers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('layout.admin.newspaper.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $newspaper = new Newspaper();
        $newspaper->title = $request->title;
        $newspaper->intro = $request->intro;
        $newspaper->description = $request->description;
        $newspaper->category_id = $request->category_id;
        $this->uploadImage($newspaper, $request);
        $newspaper->save();
        return redirect()->route('admin.dashboard');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newspaper = $this->newspaperService->findById($id);
        return view('layout.admin.newspaper.edit', compact('newspaper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $newspaper = $this->newspaperService->findById($id);
        $newspaper->fill($request->all());
        $this->uploadImage($newspaper, $request);
        $newspaper->save();
        return redirect()->route('admin.dashboard', compact('newspaper'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $newspaper = $this->newspaperService->findById($id);
        $newspaper->delete();
        return redirect()->route('newspaper.index');
    }
}
