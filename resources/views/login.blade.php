<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In — SplitBill</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="container auth-container">
        <section class="panel">
            <h2>Log In</h2>
            <p class="muted">Access your premium dashboard.</p>

            @if($errors->any())
                <div class="alert-error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="/login" method="POST" class="form-card">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@exclusive.com" required autocomplete="email" value="{{ old('email') }}">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required autocomplete="current-password">
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn-primary">Login</button>
                    <a href="/register" class="btn-link">Register</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>