<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium · Bill Split Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="dashboard-card">
        <div class="dashboard-header">
            <div class="user-badge">
                <div class="icon-badge"><i class="fa-solid fa-crown"></i></div>
                <span class="user-label">Premium</span>
            </div>
            <div class="limit-chip">
                <i class="fa-solid fa-infinity"></i> unlimited access
            </div>
        </div>

        <div class="bills-section">
            <div class="section-title"><i class="fa-solid fa-book-journal-whills"></i> Your bills</div>

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
                                <button class="action-btn" id="btn-view-{{ $bill->id }}" title="View"><i class="fa-solid fa-eye"></i></button>
                                <button class="action-btn" id="btn-edit-{{ $bill->id }}" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="action-btn" id="btn-delete-{{ $bill->id }}" title="Delete"><i class="fa-solid fa-trash-can"></i></button>
                                <button class="action-btn" id="btn-archive-{{ $bill->id }}" title="Archive"><i class="fa-solid fa-box-archive"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="empty-state">
                <i class="fa-solid fa-inbox"></i>
                <p>No bills yet. Create your first split!</p>
            </div>
            @endif
        </div>

        <div class="features">
            <button class="btn-primary" id="btn-create-bill"><i class="fa-solid fa-plus"></i> create bill</button>
            <button class="feature-btn" id="btn-add-person"><i class="fa-solid fa-user-plus"></i> add person</button>
            <button class="feature-btn" id="btn-add-guest"><i class="fa-solid fa-user"></i> add guest</button>
            <button class="feature-btn" id="btn-edit-expense"><i class="fa-solid fa-pen-to-square"></i> edit expense</button>
            <button class="feature-btn" id="btn-generate-code"><i class="fa-solid fa-code"></i> generate code</button>
        </div>

        <a href="#" class="upgrade-note">
            <i class="fa-solid fa-crown"></i>
            <span><strong>Active premium</strong> — no limits, all features</span>
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
