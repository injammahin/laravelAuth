<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" required autofocus placeholder="Name">
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Password">
    <input type="password" name="password_confirmation" required placeholder="Confirm Password">
    <button type="submit">Register</button>
</form>
