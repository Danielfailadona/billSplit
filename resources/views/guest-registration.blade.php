<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Registration — SplitBill</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="container register-container">
        <section class="panel">
            <h2>Guest Registration</h2>
            <p class="muted">Create a guest account to join splits.</p>

            @if($errors->any())
                <div class="alert-error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="/guest-registration" method="POST" class="form-card">
                @csrf
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="you@guest.com">
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary">Register as Guest</button>
                    <a href="/guest-login" class="btn-link">Already have an account? Login</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
