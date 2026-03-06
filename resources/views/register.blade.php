<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register — SplitBill</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="container register-container">
        <section class="panel">
            <h2>Create an account</h2>
            <p class="muted">Join the exclusive network to manage shared finances.</p>

            @if($errors->any())
                <div class="alert-error">
                    <ul>
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/register" method="POST" class="form-card">
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
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="8-16 chars, upper, lower, number, special">
                </div>
                
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn-primary">Create Account</button>
                    <a href="/login" class="btn-link">Login</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>