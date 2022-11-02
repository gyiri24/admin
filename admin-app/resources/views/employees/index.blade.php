<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                    <thead>
                            <tr>
                                <th>Név</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->first_name . " " .$employee->last_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>
                                        <a class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150' href="{{ route('employees.edit', $employee) }}">Szerkesztés</a>
                                        <form method="POST" action="{{ route('employees.destroy', $employee)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class = 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150' type="submit" onclick="return confirm('Biztosan törli a {{$employee->name}} nevű dolgozót?')">Törlés</button>
                                            <button type="button" class="btn btn-danger">Danger</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br/> <br/>
                    <a class='inline-flex items-center px-4 py-2 bg-red border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'
                     href="{{ route('employees.create') }}">
                        Új dolgozó létrehozása
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
