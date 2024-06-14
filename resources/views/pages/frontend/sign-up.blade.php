@extends("layouts.frontend.layout")
@section("content")
    <form method="POST" action="/api/v1/users">

        <div>
            <input type="text" placeholder="Vezetéknév: *" name="lastName">
        </div>

        <div>
            <input type="text" placeholder="Keresztnév: *" name="firstName">
        </div>

        <div>
            <input type="email" placeholder="Email: *" name="email">
        </div>

        <div>
            <input type="text" placeholder="Felhasználónév: *" name="username">
        </div>

        <div>
            <input type="password" placeholder="Jelszó: *" name="password">
        </div>

        <div>
            <input type="password" placeholder="Jelszó újra: *" name="reTypedPassword">
        </div>

        @csrf
        <div>
            <button type="submit">Regisztráció</button>
        </div>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
            </ul>
        </div>
    @endif
@endsection