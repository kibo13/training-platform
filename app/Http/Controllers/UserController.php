<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UserStoreRequest;
use App\Http\Requests\Users\UserUpdateRequest;
use App\Models\User;
use App\Services\Roles\RoleService;
use App\Services\Users\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class UserController extends Controller
{
    protected $service;
    protected $roleService;

    public function __construct(
        UserService $service,
        RoleService $roleService
    )
    {
        $this->service = $service;
        $this->roleService = $roleService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.pages.users.index', [
            'users' => $this->service->getAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.pages.users.form', [
            'roles' => $this->roleService->getAll()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Users\UserStoreRequest  $request
     * @return RedirectResponse
     */
    public function store(UserStoreRequest $request): RedirectResponse
    {
        $this->service->create($request->validated());

        $request->session()->flash('success', __('_record.added'));
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return Response
     */
    public function show(User $user): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return View
     */
    public function edit(User $user): View
    {
        return view('admin.pages.users.form', [
            'user'  => $user,
            'roles' => $this->roleService->getAll()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Users\UserUpdateRequest  $request
     * @param  \App\Models\User  $user
     * @return RedirectResponse
     */
    public function update(UserUpdateRequest $request, User $user): RedirectResponse
    {
        $this->service->update($request->all(), $user);

        $request->session()->flash('success', __('_record.updated'));
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return RedirectResponse
     */
    public function destroy(User $user, Request $request): RedirectResponse
    {
        $user->delete();

        $request->session()->flash('success', __('_record.deleted'));
        return redirect()->route('admin.users.index');
    }
}
