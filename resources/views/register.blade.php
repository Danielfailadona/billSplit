<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register — SplitBill</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="container" style="max-width:520px;margin:2.5rem auto;">
        <section class="panel">
            <h2>Create an account</h2>
            <p class="muted">Register to create and manage bills.</p>

            @if($errors->any())
                <div style="color:#b91c1c;margin-bottom:0.75rem">
                    <ul style="margin:0;padding-left:1.1rem">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/register" method="POST" class="form-card">
                @csrf
                <label>First name
                    <input type="text" name="first_name" value="{{ old('first_name') }}" required>
                </label>
                <label>Last name
                    <input type="text" name="last_name" value="{{ old('last_name') }}" required>
                </label>
                <label>Email
                    <input type="email" name="email" value="{{ old('email') }}" required>
                </label>
                <label>Password
                    <input type="password" name="password" required placeholder="8-16 chars, upper, lower, number, special">
                </label>
                <label>Confirm Password
                    <input type="password" name="password_confirmation" required>
                </label>
                <div class="form-actions">
                    <button type="submit" class="btn-primary">Create account</button>
                    <a href="/login" class="btn-link">Already have an account?</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
