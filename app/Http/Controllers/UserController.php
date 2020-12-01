<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.users.add', compact( 'users'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->save();
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        $users = $this->userService->getAll();
        $user = $this->userService->findById($id);
        return view('admin.users.userProfile', compact('user', 'users'));
    }

    public function indexProfile()
    {
        $users = $this->userService->getAll();
        return view('admin.layout.core.main_sider', compact( 'users'));
    }

    public function showUser($id)
    {
        $users = $this->userService->getAll();
        $user = $this->userService->findById($id);
        return view('admin.users.userProfile', compact('user', 'users'));
    }

    public function indexUserProfile()
    {
        $users = $this->userService->getAll();
        return view('admin.layout.core.main_sider', compact( 'users'));
    }
    public function edit($id)
    {
        $user = $this->userService->findById($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = $this->userService->findById($id);
        $user->fill($request->all());
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = $this->userService->findById($id);
        $user->delete();
        return redirect()->route('user.index');
    }

    public function changeStatus(Request $request, $id) {
        $user = $this->userService->findById($id);
        $this->userService->update($request, $user);
    }
}
