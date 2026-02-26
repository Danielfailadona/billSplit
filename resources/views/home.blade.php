<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Split Bill App</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <div class="brand">
                <h1>Split<span>Bill</span></h1>
            </div>
            <nav class="main-nav">
                <a href="#">Home</a>
                <a href="#">Dashboard</a>
                <a href="#">Create Bill</a>
                <a href="#">Profile</a>
            </nav>
        </div>
    </header>

    <main class="container main-grid">
        <section class="panel">
            <h2>Log In</h2>
            <p class="muted">Use your account to manage and split bills.</p>

            <div class="form-card" style="display:flex;flex-direction:column;gap:0.75rem">
                <a href="/login" class="btn-primary" style="text-align:center;padding:0.75rem 1rem">Log In</a>
                <a href="/register" class="btn-outline" style="text-align:center;padding:0.6rem 1rem">Sign Up</a>
            </div>

            <hr>

            <h3>Create / Join as Guest</h3>
            <form action="#" method="GET" class="invite-form">
                <label>Invitation Code
                    <input type="text" name="code" placeholder="Enter invite code">
                </label>
                <button class="btn-outline">Join</button>
            </form>
        </section>

        <aside class="panel sidebar">
            <div class="card">
                <h3>Your Bills</h3>
                <p class="muted">No bills yet — create your first bill to get started.</p>
                <ul class="bills-list">
                    <li class="bill-item empty">No details</li>
                </ul>
                <a href="#" class="btn-primary block">Create Bill</a>
            </div>

            <div class="card">
                <h4>Quick Actions</h4>
                <button class="btn-outline">Regenerate Invite Code</button>
                <button class="btn-outline">View Archive</button>
            </div>
        </aside>
    </main>

    <footer class="site-footer">
        <div class="container">
            <small>&copy; {{ date('Y') }} SplitBill — Fair and easy bill splitting.</small>
        </div>
    </footer>

</body>
</html>