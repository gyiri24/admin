<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dolgozók') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('employees.create') }}">Új dolgozó létrehozása</a>
                    <br /> <br />
                    <table>
                    <thead>
                            <tr>
                                <th>Név</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->name }}</td>
                                    <td>
                                        <a href="{{ route('employees.edit', $employee) }}">Szerkesztés</a>
                                        <form method="POST" action="{{ route('employees.destroy', $employee)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Biztosan törli a {{$employee->name}} nevű dolgozót?')">Törlés</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
