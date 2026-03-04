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
            <h2>Guest Access</h2>
            <p class="muted">Join an existing split as a guest.</p>

            @if($errors->any())
                <div class="alert-error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="/guest-login" method="POST" class="form-card">
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
                    <label for="associated_code">Associated Code</label>
                    <input type="text" id="associated_code" name="associated_code" value="{{ old('associated_code', request('code')) }}" required placeholder="Enter invite code">
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary">Join as Guest</button>
                    <a href="/" class="btn-link">Return Home</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
