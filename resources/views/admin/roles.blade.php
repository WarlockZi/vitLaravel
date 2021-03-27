<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Roles
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Roles
                </div>
                <ul>

                    @foreach ($roles as $role)
                        <li>{{$role->name}}
                            <ul>
                                @foreach($role->users as $user)
                                    <li class="px-3">{{$user->name}}</li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>

                {{--                <div id="app"></div>--}}

            </div>

            <table class="table-auto">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Views</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Intro to CSS</td>
                    <td>Adam</td>
                    <td>858</td>
                </tr>
                <tr class="bg-emerald-200">
                    <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                    <td>Adam</td>
                    <td>112</td>
                </tr>
                <tr>
                    <td>Intro to JavaScript</td>
                    <td>Chris</td>
                    <td>1,280</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</x-admin-layout>

