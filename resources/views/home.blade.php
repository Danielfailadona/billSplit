<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SplitBill | High-End Expense Sharing</title>
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
                <a href="#">Initiate Split</a>
                <a href="#">Profile</a>
            </nav>
        </div>
    </header>

    <main class="container main-grid">
        <section class="panel">
            <h2>Welcome Back</h2>
            <p class="muted">Access your portfolio to manage and split recent expenses.</p>

            <div class="form-card">
                <a href="/login" class="btn-primary block">Log In to Dashboard</a>
                <a href="/register" class="btn-outline block">Apply for Membership</a>
            </div>

            <hr class="hr-divider">

            <h3>Join Existing Split</h3>
            <p class="muted">Enter a guest code provided by a member.</p>
            <form action="/guest-login" method="GET" class="form-group">
                <div class="invite-form">
                    <input type="text" name="code" placeholder="Enter secure invite code">
                    <button class="btn-outline">Verify & Join</button>
                </div>
            </form>
        </section>

        <aside class="sidebar">
            <div class="card">
                <h3>Active Splits</h3>
                <p class="muted">You have no active ledgers.</p>
                <ul class="bills-list">
                    <li class="bill-item empty">Awaiting initialization</li>
                </ul>
                <a href="#" class="btn-amethyst block">Initiate New Split</a>
            </div>

            <div class="card">
                <h3>Quick Actions</h3>
                <div style="display: flex; flex-direction: column; gap: 0.75rem; margin-top: 1rem;">
                    <button class="btn-outline block">Regenerate Invite Key</button>
                    <button class="btn-outline block">View Financial Archive</button>
                </div>
            </div>
        </aside>
    </main>

    <footer class="site-footer">
        <div class="container">
            <small>&copy; {{ date('Y') }} SplitBill — Exclusive shared finance management.</small>
        </div>
    </footer>
</body>
</html>