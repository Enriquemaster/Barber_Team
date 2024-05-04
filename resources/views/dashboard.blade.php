<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
    <div class="mx-auto w-11/12 h-full mt-10 ">
<div class="row ">
    <div class="col-12">
        <div>
            <h2 class="text-center text-2xl font-bold text-white Bodoni">Lista de usuarios</h2>
        </div>
        <div>
        @if(Session::get('success'))
    <div class="mx-auto max-w-md mt-5 mb-5">
        <div class="bg-yellow-500 p-4 text-white text-center rounded-md">
            <strong>{{Session::get('success')}}<br><br></strong>
        </div>
    </div>
@endif
            </div>
        </div>
    </div>
    
    <div class="container mx-auto mt-8">
     <table class="min-w-full bg-zinc-700 border border-gray-300 text-white Bodoni">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Nombre</th>
                        <th class="py-2 px-4 border-b">Correo</th>
                        <th class="py-2 px-4 border-b">Fecha de creación</th>
                        <th class="py-2 px-4 border-b">Fecha de actualización</th>
                    </tr>
                </thead>

                <tbody class="bg-zinc-500">
                @foreach($users as $user)
    <tr>
    <td class="py-2 px-4 border text-center items-center">{{ $user->id }}</td>
            <td class="py-2 px-4 border text-center items-center">{{ $user->name }}</td>
            <td class="py-2 px-4 border text-center items-center">{{ $user->email }}</td>
            <td class="py-2 px-4 border text-center items-center">{{ $user->created_at }}</td>
            <td class="py-2 px-4 border text-center items-center">{{ $user->updated_at }}</td>
    </tr>

    @endforeach
                </tbody>
            </table>
</div>
</div>
    </div>
</x-app-layout>
