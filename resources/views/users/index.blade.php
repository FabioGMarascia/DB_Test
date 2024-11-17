@extends('users/layouts.app')

@section('title', 'USERS LIST')

@section('content')
    <h1 class="text-center display-6 fw-bold text-dark mt-4">Users List</h1>

    <div class="row mx-0 justify-content-center">
        <div class="col-8 px-0">
            <div class="row mx-0 my-4 justify-content-around">
                <table class="table table-striped table-bordered border border-3 table-dark">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="btn btn-warning btn-sm fw-bold mx-2">EDIT</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm fw-bold mx-2"
                                            onclick="return confirm('Are you sure you want to delete this user?');">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endSection
