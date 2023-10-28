@include('Layout.header')
<main>
    <div class="form">
        <h1>Login</h1>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="Login">
            <a href="{{route('registerForm')}}">Register</a>
        </form>

    </div>
</main>
@include('Layout.footer')
