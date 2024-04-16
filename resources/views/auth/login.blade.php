<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" required autofocus placeholder="Email">
    <input type="password" name="password" required placeholder="Password">
    <label>
        <input type="checkbox" name="remember">
        Remember me
    </label>
    <button type="submit">Log in</button>
</form>
