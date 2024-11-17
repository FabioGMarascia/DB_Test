@extends('users/layouts.app')

@section('content')
    <h1 class="text-center mb-4 fw-bold">Edit User</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row mx-0 justify-content-center">
        <div class="col-5 px-0 border border-1 border-dark py-3">
            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mx-0 justify-content-center">

                    <div class="col-5 text-center py-2">
                        <label for="name" class="fw-bold my-2">Name</label>
                        <div>
                            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                                class="text-center" required>
                        </div>
                    </div>
                    <div class="col-5 text-center">
                        <label for="email" class="fw-bold my-2">Email</label>
                        <div>
                            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                                class="text-center" required>
                        </div>
                    </div>
                    <div class="col-5 text-center">
                        <label for="password" class="fw-bold my-2">Password</label>
                        <div>
                            <input type="password" id="password" name="password" class="text-center">
                        </div>
                    </div>
                    <div class="col-5 text-center">
                        <label for="password_confirmation" class="fw-bold my-2">Confirm Password</label>
                        <div>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="text-center">
                        </div>
                    </div>
                    <div class="text-center my-3">
                        <button type="submit" class="col-2 btn border border-2 border-dark fw-bold mt-4">UPDATE USER
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <style>
        button:hover {
            background-color: #212529 !important;
            color: white !important;
        }
    </style>
@endsection
