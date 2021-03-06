@extends('layouts.admin')

@section('container')

<div class="bg-white sm:rounded-lg flex">
    <!-- side nav -->
    <div class="bg-gray-300 text-gray-800 hidden md:flex h-auto">
        <ul>
            <li>
                <a href="{{ route('staff.program-detail', $assignedprograms->program_id) }}" class="hover:bg-white hover:text-indigo-600 px-7 md:px-16 lg:px-20 h-16 flex justify-center items-center w-auto">Details</a>
            </li>
            <li>
                <a href="{{ route('staff.program-announcement', $assignedprograms->program_id) }}" class="hover:bg-white hover:text-indigo-600 px-7 md:px-16 lg:px-20 bg-white text-indigo-600 h-16 flex justify-center items-center w-auto">Announcement</a>
            </li>
            <li>
                <a href="{{ route('staff.program-material', $assignedprograms->program_id) }}" class="hover:bg-white hover:text-indigo-600 px-7 md:px-16 lg:px-20 h-16 flex justify-center items-center w-auto">Materials</a>
            </li>
            <li>
                <a href="{{ route('staff.program-feedback', $assignedprograms->program_id) }}" class="hover:bg-white hover:text-indigo-600 px-7 md:px-16 lg:px-20 h-16 flex justify-center items-center w-auto">Feedback</a>
            </li>
        </ul>
    </div>
    <div class="block w-full min-h-screen">
        <form method="POST" action="{{ route('staff.program-announcement', $assignedprograms->id) }}" class="w-auto m-5" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="w-auto mx-3 mb-6">
                <div class="px-3">
                    <label class="text-gray-700 text-xl font-bold mb-2" for="title">Title</label>
                    <input id="title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="title" required autofocus autocomplete="name" />
                </div>
            </div>
            <div class="w-auto mx-3 mb-6">
                <div class="px-3">
                    <label class="text-gray-700 text-xl font-bold mb-2" for="title">Content</label>
                    <textarea id="content" class="h-96 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="content" required autofocus autocomplete="name"></textarea>
                </div>
            </div>
            <div class="w-auto mx-3 mb-10">
                <div class="w-full px-3">
                    <label class="block text-gray-700 text-xl font-bold mb-2" for="option">
                        Status
                    </label>
                    <div class="relative">
                        <select id="state" name="state" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="ACTIVE">Active</option>
                            <option value="INACTIVE">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mx-3 mb-6 px-3 text-right grid grid-cols-2">
                <a href="{{ route('staff.program-announcement', $assignedprograms->id) }}" class="mr-5 w-auto text-center shadow focus:shadow-outline bg-red-400 focus:outline-none text-gray-200 hover:bg-red-600 hover:text-white font-bold py-2 px-4 rounded">
                    Back
                </a>
                <button id="submit" name="submit" class="w-auto shadow focus:shadow-outline bg-indigo-400 focus:outline-none text-gray-200 hover:bg-indigo-600 hover:text-white font-bold py-2 px-4 rounded" >
                    Create
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
