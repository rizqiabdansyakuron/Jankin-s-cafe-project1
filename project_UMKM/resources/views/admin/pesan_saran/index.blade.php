@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pesan Saran List</h1>
    <a href="{{ route('pesan-saran.create') }}" class="btn btn-primary mb-3">Create New pesan saran</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
            <tr>
                <td>{{ $menu->id }}</td>
                <td>{{ $menu->nama }}</td>
                <td>{{ $menu->email }}</td>
                <td>{{ $menu->pesan }}</td>
                <td>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this menu?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
