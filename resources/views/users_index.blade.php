@extends('layout.main')
@section('content')
    
<style>
    table {
    border-collapse: collapse;
}

th, td {
    border: 1px solid #d1d5db; /* Border abu-abu */
}

tbody tr:last-child td {
    border-bottom: 2px solid #000; /* Garis bawah yang lebih tebal untuk baris terakhir */
}
</style>

<a href="{{ route('users.create') }}" class="btn btn-sm btn-success d-flex align-items-center">
    <span class="me-1">Tambah User</span>
    <i class="fa fa-plus"></i> <!-- Jika ingin menambahkan ikon -->
</a>


<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-200 text-gray-700">
                <th class="py-2 px-4 border-b border-gray-300">Nomer</th>
                <th class="py-2 px-4 border-b border-gray-300">PFP</th>
                <th class="py-2 px-4 border-b border-gray-300">Username</th>
                <th class="py-2 px-4 border-b border-gray-300">Nama</th>
                <th class="py-2 px-4 border-b border-gray-300">Role</th>
                <th class="py-2 px-4 border-b border-gray-300">Tanggal Pembuatan</th>
                <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($users as $user)
            <tr>
                <td class="py-2 px-4 border-b border-gray-300 text-center">{{ $no++ }}</td>
                <td class="py-2 px-4 border-b border-gray-300 text-center">
                    <img src="{{ asset($user->pfp) }}" alt="Foto" style="width: 132px; height: 132px;">
                </td>
                <td class="py-2 px-4 border-b border-gray-300 text-center">{{ $user->username }}</td>
                <td class="py-2 px-4 border-b border-gray-300 text-center">{{ $user->name }}</td>
                <td class="py-2 px-4 border-b border-gray-300 text-center">{{ $user->role }}</td>
                <td class="py-2 px-4 border-b border-gray-300 text-center">{{ $user->created_at }}</td>
                <td class="py-2 px-4 border-b border-gray-300 text-center">
                    <a href="{{ route('dashboard') }}" class="text-yellow-500 hover:text-yellow-600 mr-2">
                        <i class="fas fa-pencil-alt fa-lg"></i>
                    </a>
                    <form action="{{ route('dashboard') }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-600">
                            <i class="fas fa-trash fa-lg"></i>
                        </button>
                    </form>
                </td>
                
                
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

    

@endsection
