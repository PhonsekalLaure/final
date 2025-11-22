<style>
    /* Page background */
    body {
        background: #f4f4f4;
        font-family: 'Poppins', sans-serif;
    }

    /* Main content wrapper (beside sidebar) */
    .main-content {
        margin-left: 260px; /* match sidebar width */
        padding: 20px;
    }


    /* Top header container */
    .dashboard-header {
        background: white;
        padding: 20px 30px;
        border-radius: 15px;
        border: 2px solid #0b824a;
        margin-bottom: 25px;
    }

    .dashboard-header h2 {
        font-size: 30px;
        font-weight: 700;
        color: #0b824a;
    }

    /* Dashboard cards */
    .stats-card {
        background: white;
        padding: 25px;
        border-radius: 15px;
        border: 2px solid #dcdcdc;
        transition: 0.2s ease;
        text-align: center;
        min-height: 150px;
    }

    .stats-card:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        transform: translateY(-3px);
    }

    .stats-title {
        font-size: 18px;
        font-weight: 600;
        color: #0b824a;
    }

    .stats-number {
        font-size: 40px;
        font-weight: 800;
        margin-top: 5px;
        color: #333;
    }

    .sub-label {
        font-size: 13px;
        margin-top: -5px;
    }

    /* Section titles */
    .section-title {
        font-weight: 700;
        font-size: 20px;
        color: #0b824a;
        margin-bottom: 15px;
    }

    /* Recent activities box */
    .activities-box {
        background: white;
        padding: 25px;
        border-radius: 15px;
        border: 2px solid #dcdcdc;
        height: 270px;
    }

    /* Quick actions */
    .quick-box {
        background: white;
        padding: 25px;
        border-radius: 15px;
        border: 2px solid #dcdcdc;
    }

    .quick-btn {
        width: 100%;
        padding: 15px;
        border-radius: 12px;
        border: none;
        font-weight: 600;
        font-size: 16px;
        margin-bottom: 12px;
        background: #0b824a;
        color: white;
        transition: 0.2s ease;
    }

    .quick-btn:hover {
        background: #fabc15;
        color: black;
    }
</style>


<div class="main-content">

    <!-- Top Header -->
    <div class="dashboard-header d-flex justify-content-between align-items-center">
        <h2>Admin Dashboard</h2>

        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-person-circle" style="font-size: 40px; color:#0b824a;"></i>
            <div>
                <b><?= session()->get('username'); ?></b><br>
                <small>Administrator</small><br>
                <small>Current time: <?= date("M d, Y h:i A"); ?></small>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="row g-4">

        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-title">Total Equipment</div>
                <div class="stats-number"><?= $total_equipment ?? 0 ?></div>
                <div class="sub-label">Registered equipment</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-title">Borrowed Today</div>
                <div class="stats-number"><?= $borrowed_today ?? 0 ?></div>
                <div class="sub-label">Today's activity</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-title">Currently Borrowed</div>
                <div class="stats-number"><?= $currently_borrowed ?? 0 ?></div>
                <div class="sub-label">Items not yet returned</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stats-card">
                <div class="stats-title">Available Equipment</div>
                <div class="stats-number"><?= $available_equipment ?? 0 ?></div>
                <div class="sub-label">Units available</div>
            </div>
        </div>

    </div>

    <br>

    <!-- Recent Activities and Quick Actions -->
    <div class="row g-4">

        <!-- Recent Activities -->
        <div class="col-md-8">
            <div class="activities-box">
                <div class="section-title">
                    <i class="bi bi-clock-history"></i> Recent Activities
                </div>
                
                <div>
                    <?php if (!empty($recent_logs)) : ?>
                        <ul>
                            <?php foreach ($recent_logs as $log): ?>
                                <li><?= esc($log); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else : ?>
                        <p>No recent activities</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-md-4">
            <div class="quick-box">
                <div class="section-title">
                    <i class="bi bi-lightning-fill"></i> Quick Actions
                </div>

                <button class="quick-btn" onclick="window.location.href='<?= site_url('equipment/add') ?>'">
                    <i class="bi bi-plus-circle"></i> Add Equipment
                </button>

                <button class="quick-btn" onclick="window.location.href='<?= site_url('borrow') ?>'">
                    <i class="bi bi-cart-fill"></i> Process Borrowing
                </button>

                <button class="quick-btn" onclick="window.location.href='<?= site_url('return') ?>'">
                    <i class="bi bi-arrow-return-left"></i> Process Returning
                </button>

                <button class="quick-btn" onclick="window.location.href='<?= site_url('reports') ?>'">
                    <i class="bi bi-bar-chart-fill"></i> View Reports
                </button>
            </div>
        </div>

    </div>

</div>
