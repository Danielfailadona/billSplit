<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In — SplitBill</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="container" style="max-width:420px;margin:3rem auto;">
        <section class="panel">
            <h2>Log In</h2>
            <p class="muted">Sign in to access your dashboard.</p>

            @if($errors->any())
                <div style="color:#b91c1c;margin-bottom:0.75rem">{{ $errors->first() }}</div>
            @endif

            <form action="/login" method="POST" class="form-card">
                @csrf
                <label>Email
                    <input type="email" name="email" placeholder="you@example.com" required autocomplete="email" value="{{ old('email') }}">
                </label>
                <label>Password
                    <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
                </label>
                <div class="form-actions">
                    <button type="submit" class="btn-primary">Log In</button>
                    <a href="/" class="btn-link">Back</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
