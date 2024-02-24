<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Services\AuthenticationService;
use App\Services\AvatarService;
use App\Services\DateFormatterService;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Services\TaskService;

class ProfileController extends Controller
{
    protected TaskService $taskService;
    protected DateFormatterService $dateFormatter;
    protected AvatarService $avatarService;
    protected UserService $userService;
    protected AuthenticationService $authenticationService;

    public function __construct(TaskService $taskService, DateFormatterService $dateFormatter, AvatarService $avatarService, UserService $userService, AuthenticationService $authenticationService)
    {
        $this->taskService = $taskService;
        $this->dateFormatter = $dateFormatter;
        $this->avatarService = $avatarService;
        $this->userService = $userService;
        $this->authenticationService = $authenticationService;
        $this->middleware('auth');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        $validatedData = $request->validated();
        $avatarPath = $this->avatarService->handleAvatar($request);

        if (!$avatarPath) {
            $avatarPath = $this->avatarService->getDefaultAvatarPath();
        }

        $user->update(array_merge($validatedData, ['avatar' => $avatarPath]));

        return redirect()->route('profile.show', ['profile' => $user->id]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $totalTasks = $this->taskService->getTotalTasks($user);
        $completedTasks = $this->taskService->getCompletedTasks($user);
        $formattedCreatedAt = $this->dateFormatter->format($user->created_at);

        return view('profile.show', compact('user', 'totalTasks', 'completedTasks', 'formattedCreatedAt'));
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
            'name' => ['required', 'string'],
        ]);

        $user = $request->user();
        $name = $request->input('name');

        if ($this->userService->deleteUserAndFoldersAndTasks($user, $name)) {
            return $this->authenticationService->logoutAndInvalidateSession();
        }

        return back()->withErrors(['name' => 'Invalid username for detection']);
    }
}
