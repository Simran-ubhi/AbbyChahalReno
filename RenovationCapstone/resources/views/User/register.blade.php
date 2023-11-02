@include('Layout.header')

<main>
    <h1>Register</h1>


    {{-- ----------- Errors ------------ --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form">

    <form action="{{route('registerUser')}}" method="post">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="phone">Phone no.:</label>
            <input type="number" name="phone">
        </div>
        <input type="hidden" value="User" name="role">
        <div>
            <label for="address">Address:</label>
            <textarea name="address"  cols="30" rows="10" required></textarea>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
        <input type="submit" value="Submit">

    <a href="{{route('loginForm')}}">Login</a>
    </form>


</div>
</main>
@include('Layout.footer')
