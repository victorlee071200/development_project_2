<x-app-layout title="Staff Specific Program - Edit Announcement">
    <div class="bg-white sm:rounded-lg flex">
        <!-- side nav -->
        <div class="bg-gray-300 text-gray-800 hidden md:flex h-auto">
            <ul>
                <li>
                    <a href="{{ route('staff.program-detail', $assignedprograms->id) }}" class="hover:bg-white hover:text-indigo-600 px-7 md:px-16 lg:px-20 h-16 flex justify-center items-center w-auto">Details</a>
                </li>
                <li>
                    <a href="{{ route('staff.program-announcement', $assignedprograms->id) }}" class="hover:bg-white hover:text-indigo-600 px-7 md:px-16 lg:px-20 bg-white text-indigo-600 h-16 flex justify-center items-center w-auto">Announcement</a>
                </li>
                <li>
                    <a href="{{ route('staff.program-material', $assignedprograms->id) }}" class="hover:bg-white hover:text-indigo-600 px-7 md:px-16 lg:px-20 h-16 flex justify-center items-center w-auto">Materials</a>
                </li>
                <li>
                    <a href="{{ route('staff.program-feedback', $assignedprograms->id) }}" class="hover:bg-white hover:text-indigo-600 px-7 md:px-16 lg:px-20 h-16 flex justify-center items-center w-auto">Feedback</a>
                </li>
            </ul>
        </div>
        <div class="block w-full min-h-screen">
            <form method="POST" action="{{ route('staff.program-announcement-update', [$assignedprograms->id, $announcements->id]) }}" class="w-auto m-5" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="w-auto mx-3 mb-6">
                    <div class="px-3">
                        <label class="text-gray-700 text-xl font-bold mb-2" for="title">Title</label>
                        <input id="title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="title" value="{{$announcements->title}}" required autofocus autocomplete="name"/>
                    </div>
                </div>
                <div class="w-auto mx-3 mb-6">
                    <div class="px-3">
                        <label class="text-gray-700 text-xl font-bold mb-2" for="title">Content</label>
                        <textarea id="content" class="h-96 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="content" required autofocus autocomplete="name">
                            {{$announcements->content}}
                        </textarea>
                    </div>
                </div>
                <div class="w-auto mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block text-gray-700 text-xl font-bold mb-2" for="option">
                            Status
                        </label>
                        <div class="relative">
                            @if($announcements->state == "ACTIVE")
                                <select id="state" name="state" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="ACTIVE" selected>Active</option>
                                    <option value="INACTIVE">Inactive</option>
                                </select>
                            @else
                                <select id="state" name="state" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="ACTIVE">Active</option>
                                    <option value="INACTIVE" selected>Inactive</option>
                                </select>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mx-3 mb-6 px-3 text-right">
                    <button id="submit" name="submit" class="w-1/2 shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline bg-indigo-400 focus:outline-none text-gray-200 hover:bg-indigo-600 hover:text-white font-bold py-2 px-4 rounded" >Update</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
