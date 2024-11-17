<header class="bg-dark mb-5">

    <div class="row mx-0 justify-content-center py-2">
        <div class="col-10">
            <div class="row mx-0 justify-content-around">
                <div class="col-2">
                    <a href="{{ route('users.index') }}">
                        <img src="/img/logo.png" class="logo rounded my_w my-1">
                    </a>

                </div>

                <div class="col-6 my-auto">
                    <nav class="fw-bold fs-4 text-end">

                        <a href="{{ route('users.index') }}"
                            class="px-3 text-decoration-none text-white py-4 rounded-5 @if (Route::currentRouteName() == 'index') active @endif">Home</a>
                        <a href="{{ route('users.create') }}"
                            class="px-3 text-decoration-none text-white py-4 rounded-5
                            @if (Route::currentRouteName() == 'create') active @endif">New
                            User</a>

                    </nav>
                </div>
            </div>
        </div>
    </div>
    <style>
        .my_w {
            width: 6rem;
        }
    </style>

</header>
