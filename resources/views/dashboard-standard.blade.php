<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard · SplitBill</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="dashboard-card">
        <div class="dashboard-header">
            <div class="user-badge">
                <div class="icon-badge"><i class="fa-solid fa-user-shield"></i></div>
                <span class="user-label">Standard Member</span>
            </div>
            <div class="limit-chip">
                <i class="fa-solid fa-chart-pie"></i> 3/5 Splits Utilized
            </div>
        </div>

        <div class="bills-section">
            <div class="section-title"><i class="fa-solid fa-book-journal-whills"></i> Active Ledgers</div>
            
            <div class="bill-row">
                <div class="bill-name">
                    <i class="fa-solid fa-receipt"></i> Artisan Groceries 
                    <span class="badge">3 members</span>
                </div>
                <div class="bill-actions">
                    <button class="action-btn" title="Inspect"><i class="fa-solid fa-eye"></i></button>
                    <button class="action-btn" title="Modify"><i class="fa-solid fa-pen-nib"></i></button>
                    <button class="action-btn" title="Void"><i class="fa-solid fa-trash"></i></button>
                    <button class="action-btn" title="Store"><i class="fa-solid fa-vault"></i></button>
                </div>
            </div>

            <div class="bill-row">
                <div class="bill-name">
                    <i class="fa-solid fa-receipt"></i> Gala Contribution 
                    <span class="badge">2 members</span>
                </div>
                <div class="bill-actions">
                    <button class="action-btn" title="Inspect"><i class="fa-solid fa-eye"></i></button>
                    <button class="action-btn" title="Modify"><i class="fa-solid fa-pen-nib"></i></button>
                    <button class="action-btn" title="Void"><i class="fa-solid fa-trash"></i></button>
                    <button class="action-btn" title="Store"><i class="fa-solid fa-vault"></i></button>
                </div>
            </div>
        </div>

        <div class="features">
            <button class="btn-primary"><i class="fa-solid fa-plus"></i> Initiate New Split</button>
            <button class="feature-btn"><i class="fa-solid fa-user-plus"></i> Invite Member (max 3)</button>
            <button class="feature-btn"><i class="fa-solid fa-id-badge"></i> Authorize Guest</button>
            <button class="feature-btn"><i class="fa-solid fa-file-invoice-dollar"></i> Adjust Expenses</button>
        </div>

        <a href="#" class="upgrade-note">
            <i class="fa-solid fa-crown"></i>
            <span><strong>Upgrade to SplitBill Black</strong> — unlock infinite ledgers and advanced analytics.</span>
        </a>

        <div class="logout-section">
            <form action="/logout" method="POST">
                @csrf
                <button class="btn-outline" type="submit">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Secure Logout
                </button>
            </form>
        </div>
    </div>
</body>
</html>