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
                                <button class="action-btn" id="btn-view-{{ $bill->id }}" title="View"><i class="fa-regular fa-eye"></i></button>
                                <button class="action-btn disabled" id="btn-edit-{{ $bill->id }}" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action-btn disabled" id="btn-delete-{{ $bill->id }}" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
                                <button class="action-btn disabled" id="btn-archive-{{ $bill->id }}" title="Archive"><i class="fa-regular fa-box-archive"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="empty-state">
                <i class="fa-solid fa-inbox"></i>
                <p>You haven't been added to any bills yet.</p>
            </div>
            @endif
        </div>

        <div class="features">
            <button class="feature-btn" id="btn-enter-code"><i class="fa-regular fa-envelope"></i> enter code</button>
            <button class="feature-btn" id="btn-view-only"><i class="fa-regular fa-eye"></i> view only</button>
            <button class="feature-btn disabled" id="btn-create-bill"><i class="fa-regular fa-plus"></i> create bill</button>
            <button class="feature-btn disabled" id="btn-add-person"><i class="fa-regular fa-user-plus"></i> add person</button>
        </div>

        <button class="upgrade-area" id="btn-upgrade-registered">
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            <span><strong>Upgrade to registered</strong> (password only)</span>
        </button>

        <div class="info-note">
            <i class="fa-regular fa-circle-info"></i> invited via code · pre‑registered details
        </div>

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