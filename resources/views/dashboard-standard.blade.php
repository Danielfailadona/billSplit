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
                <i class="fa-solid fa-chart-pie"></i> {{ $bills->count() }}/5 Splits Utilized
            </div>
        </div>

        <div class="bills-section">
            <div class="section-title"><i class="fa-solid fa-book-journal-whills"></i> Active Ledgers</div>

            @if($bills->count() > 0)
            <table class="bills-table">
                <thead>
                    <tr>
                        <th>Bill Name</th>
                        <th>Invitation Code</th>
                        <th>Members</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bills as $bill)
                    <tr>
                        <td>
                            <i class="fa-solid fa-receipt"></i> {{ $bill->bill_name }}
                        </td>
                        <td><code>{{ $bill->invitation_code }}</code></td>
                        <td>
                            <span class="badge">{{ $bill->participants_count }} members</span>
                        </td>
                        <td>
                            <span class="status-badge status-{{ $bill->status }}">{{ $bill->status }}</span>
                        </td>
                        <td>
                            <div class="bill-actions">
                                <button class="action-btn" id="btn-view-{{ $bill->id }}" title="Inspect"><i class="fa-solid fa-eye"></i></button>
                                <button class="action-btn" id="btn-modify-{{ $bill->id }}" title="Modify"><i class="fa-solid fa-pen-nib"></i></button>
                                <button class="action-btn" id="btn-void-{{ $bill->id }}" title="Void"><i class="fa-solid fa-trash"></i></button>
                                <button class="action-btn" id="btn-store-{{ $bill->id }}" title="Store"><i class="fa-solid fa-vault"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="empty-state">
                <i class="fa-solid fa-inbox"></i>
                <p>No active bills yet. Start a new split!</p>
            </div>
            @endif
        </div>

        <div class="features">
            <button class="btn-primary" id="btn-initiate-split"><i class="fa-solid fa-plus"></i> Initiate New Split</button>
            <button class="feature-btn" id="btn-invite-member"><i class="fa-solid fa-user-plus"></i> Invite Member (max 3)</button>
            <button class="feature-btn" id="btn-authorize-guest"><i class="fa-solid fa-id-badge"></i> Authorize Guest</button>
            <button class="feature-btn" id="btn-adjust-expenses"><i class="fa-solid fa-file-invoice-dollar"></i> Adjust Expenses</button>
        </div>

        <a href="#" class="upgrade-note">
            <i class="fa-solid fa-crown"></i>
            <span><strong>Upgrade to SplitBill Black</strong> — unlock infinite ledgers and advanced analytics.</span>
        </a>

        <div class="logout-section">
            <form action="/logout" method="POST">
                @csrf
                <button class="btn-outline" type="submit" id="btn-logout">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                </button>
            </form>
        </div>
    </div>
</body>
</html>
