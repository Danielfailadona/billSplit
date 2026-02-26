<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium · Bill Split Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="dashboard-premium">
    <div class="dashboard-card">
        <div class="dashboard-header">
            <div class="user-badge">
                <div class="icon-badge"><i class="fa-solid fa-crown"></i></div>
                <span class="user-label">Premium</span>
            </div>
            <div class="limit-chip"><i class="fa-regular fa-infinity"></i> unlimited access</div>
        </div>

        <div class="bills-section">
            <div class="section-title"><i class="fa-regular fa-rectangle-list"></i> Your bills</div>
            <div class="bill-row">
                <div class="bill-name"><i class="fa-solid fa-receipt"></i> Company dinner</div>
                <div class="bill-actions">
                    <button class="action-btn" title="View"><i class="fa-regular fa-eye"></i></button>
                    <button class="action-btn" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                    <button class="action-btn" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
                    <button class="action-btn" title="Archive"><i class="fa-regular fa-box-archive"></i></button>
                </div>
            </div>
            <div class="bill-row">
                <div class="bill-name"><i class="fa-solid fa-receipt"></i> Beach house</div>
                <div class="bill-actions">
                    <button class="action-btn" title="View"><i class="fa-regular fa-eye"></i></button>
                    <button class="action-btn" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                    <button class="action-btn" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
                    <button class="action-btn" title="Archive"><i class="fa-regular fa-box-archive"></i></button>
                </div>
            </div>
        </div>

        <div class="features">
            <button class="feature-btn"><i class="fa-regular fa-plus"></i> create bill</button>
            <button class="feature-btn"><i class="fa-regular fa-user-plus"></i> add person</button>
            <button class="feature-btn"><i class="fa-regular fa-user"></i> add guest</button>
            <button class="feature-btn"><i class="fa-regular fa-pen-to-square"></i> edit expense</button>
            <button class="feature-btn"><i class="fa-regular fa-code"></i> generate code</button>
        </div>

        <div class="status-note">
            <i class="fa-regular fa-circle-check" style="color:#2b6e4f;"></i>
            <span><strong>Active premium</strong> — no limits, all features</span>
        </div>

        <div class="logout-section">
            <form action="/logout" method="POST">
                @csrf
                <button class="btn-outline" type="submit">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                </button>
            </form>
        </div>
    </div>
</body>
</html>
