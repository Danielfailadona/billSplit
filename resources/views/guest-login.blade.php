<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Login — SplitBill</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="container auth-container">
        <section class="panel">
            <h2>Guest Login</h2>
            <p class="muted">Access your guest dashboard.</p>

            @if($errors->any())
                <div class="alert-error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="/guest-login" method="POST" class="form-card">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="you@guest.com">
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary">Login as Guest</button>
                    <a href="/" class="btn-link">Return Home</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
