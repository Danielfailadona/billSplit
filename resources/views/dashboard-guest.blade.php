<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest · Bill Split Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="dashboard-guest">
    <div class="dashboard-card">
        <div class="dashboard-header">
            <div class="user-badge">
                <div class="icon-badge"><i class="fa-regular fa-user"></i></div>
                <span class="user-label">Guest</span>
            </div>
            <div class="limit-chip"><i class="fa-regular fa-clock"></i> 6h access · 4h left</div>
        </div>

        <div class="bills-section">
            <div class="section-title"><i class="fa-regular fa-rectangle-list"></i> Shared with you</div>
            <div class="bill-row">
                <div class="bill-name"><i class="fa-solid fa-receipt"></i> Dinner·Luna</div>
                <div class="bill-actions">
                    <button class="action-btn" title="View"><i class="fa-regular fa-eye"></i></button>
                    <button class="action-btn disabled" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                    <button class="action-btn disabled" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
                    <button class="action-btn disabled" title="Archive"><i class="fa-regular fa-box-archive"></i></button>
                </div>
            </div>
            <div class="bill-row">
                <div class="bill-name"><i class="fa-solid fa-receipt"></i> Weekend trip</div>
                <div class="bill-actions">
                    <button class="action-btn" title="View"><i class="fa-regular fa-eye"></i></button>
                    <button class="action-btn disabled" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                    <button class="action-btn disabled" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
                    <button class="action-btn disabled" title="Archive"><i class="fa-regular fa-box-archive"></i></button>
                </div>
            </div>
        </div>

        <div class="features">
            <button class="feature-btn"><i class="fa-regular fa-envelope"></i> enter code</button>
            <button class="feature-btn"><i class="fa-regular fa-eye"></i> view only</button>
            <button class="feature-btn disabled"><i class="fa-regular fa-plus"></i> create bill</button>
            <button class="feature-btn disabled"><i class="fa-regular fa-user-plus"></i> add person</button>
        </div>

        <button class="upgrade-area">
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            <span><strong>Upgrade to registered</strong> (password only)</span>
        </button>

        <div class="info-note">
            <i class="fa-regular fa-circle-info"></i> invited via code · pre‑registered details
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
