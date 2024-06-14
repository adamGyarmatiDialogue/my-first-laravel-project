@extends("layouts.frontend.layout")
@section("content")
    <form method="POST" action="/api/v1/users">

        <div>
            <input type="text" placeholder="Vezetéknév: *">
        </div>

        <div>
            <input type="text" placeholder="Keresztnév: *">
        </div>

        <div>
            <input type="text" placeholder="Felhasználónév: *">
        </div>

        <div>
            <input type="text" placeholder="Jelszó: *">
        </div>

        <div>
            <input type="text" placeholder="Jelszó újra: *">
        </div>

        @csrf
        <div>
            <button type="submit">Regisztráció</button>
        </div>
    </form>
@endsection