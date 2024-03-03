<?php

namespace App\Http\Controllers;

use App\Http\Requests\Folder\CreateFolderRequest;
use App\Http\Requests\Folder\UpdateFolderRequest;
use App\Models\Folder;
use App\Models\Task;
use App\Services\FolderService;
use App\Services\TaskService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class FolderController extends Controller
{
    protected TaskService $taskService;
    protected FolderService $folderService;

    public function __construct(TaskService $taskService, FolderService $folderService)
    {
        $this->taskService = $taskService;
        $this->folderService = $folderService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $user = Auth::user();

        $folders = Folder::orderBy('id')->where('user_id', Auth::id())->paginate(10);

        $getTotalTasksInFolder = $this->taskService->getTotalTasksInFolder($user, $folders);

        return view('folders.index', compact('folders', 'getTotalTasksInFolder'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('folders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateFolderRequest $request): RedirectResponse
    {
        Auth::user()->folders()->create($request->validated());

        return redirect()->route('folders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Folder $folder): View
    {
        $tasks = Task::orderBy('id')->where('folder_id', $folder->id)->paginate(10);

        return view('folders.show', compact('folder', 'tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Folder $folder): View
    {
        return view('folders.edit', compact('folder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFolderRequest $request, Folder $folder): RedirectResponse
    {
        $folder->update($request->validated());

        return redirect()->route('folders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Folder $folder): RedirectResponse
    {
        $user = $request->user();

        $this->folderService->deleteFolderAndTasks($user, $folder);

        return redirect()->route('folders.index');
    }
}
