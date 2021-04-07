<x-app-layout title="Client View Program">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <h1>Program List</h1>

                <table class="table table-striped">
                    <tbody>
                    @foreach($approvedprograms as $program)
                    <tr>
                        <td><a class="hover:bg-blue-700" href="programs/{{$program->id}}">{{$program->name}}</a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>