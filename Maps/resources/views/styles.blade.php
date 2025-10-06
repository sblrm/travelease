@section('styles')
<style>
    :root {
        --primary-color: #3498db;
        --secondary-color: #2ecc71;
        --accent-color: #f39c12;
        --dark-color: #34495e;
        --light-color: #ecf0f1;
        --danger-color: #e74c3c;
        --text-color: #2c3e50;
        --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        background-color: #f5f7fa;
        color: var(--text-color);
    }

    .container {
        display: flex;
        min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
        width: 250px;
        background-color: var(--primary-color);
        color: white;
        padding: 20px 0;
        box-shadow: var(--shadow);
        display: flex;
        flex-direction: column;
    }

    .logo {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
    }

    .logo h1 {
        font-size: 24px;
        font-weight: 700;
    }

    .logo-icon {
        margin-right: 10px;
        font-size: 28px;
    }

    .nav-menu {
        flex-grow: 1;
    }

    .nav-menu ul {
        list-style: none;
    }

    .nav-menu li {
        margin-bottom: 5px;
    }

    .nav-menu a {
        display: flex;
        align-items: center;
        color: white;
        text-decoration: none;
        padding: 12px 20px;
        transition: all 0.3s ease;
    }

    .nav-menu a:hover {
        background-color: rgba(255, 255, 255, 0.1);
        border-left: 4px solid var(--accent-color);
    }

    .nav-menu a.active {
        background-color: rgba(255, 255, 255, 0.2);
        border-left: 4px solid var(--accent-color);
    }

    .nav-icon {
        margin-right: 12px;
        font-size: 18px;
    }

    .user-profile {
        padding: 15px 20px;
        display: flex;
        align-items: center;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
    }

    .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: var(--secondary-color);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 10px;
    }

    .user-info {
        flex-grow: 1;
    }

    .user-name {
        font-weight: 600;
        font-size: 14px;
    }

    .user-role {
        font-size: 12px;
        opacity: 0.8;
    }

    /* Main Content */
    .main-content {
        flex-grow: 1;
        padding: 20px;
        overflow-y: auto;
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .search-bar {
        flex-grow: 1;
        max-width: 500px;
        position: relative;
    }

    .search-bar input {
        width: 100%;
        padding: 10px 15px 10px 35px;
        border: 1px solid #ddd;
        border-radius: 8px;
        outline: none;
        font-size: 14px;
    }

    .search-icon {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #888;
    }

    .notification {
        margin-left: 20px;
        position: relative;
        cursor: pointer;
    }

    .notification-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background-color: var(--danger-color);
        color: white;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        font-weight: bold;
    }

    /* Dashboard Cards */
    .cards-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    .card {
        background-color: white;
        border-radius: 10px;
        box-shadow: var(--shadow);
        padding: 20px;
        display: flex;
        flex-direction: column;
    }

    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .card-title {
        font-size: 16px;
        font-weight: 600;
    }

    .card-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .card-icon.blue {
        background-color: var(--primary-color);
    }

    .card-icon.green {
        background-color: var(--secondary-color);
    }

    .card-icon.yellow {
        background-color: var(--accent-color);
    }

    .card-icon.red {
        background-color: var(--danger-color);
    }

    .card-value {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .card-description {
        font-size: 12px;
        color: #888;
    }

    /* Tabs */
    .tabs {
        display: flex;
        border-bottom: 1px solid #ddd;
        margin-bottom: 20px;
    }

    .tab {
        padding: 12px 20px;
        cursor: pointer;
        font-weight: 600;
        color: #888;
        border-bottom: 3px solid transparent;
        transition: all 0.3s ease;
    }

    .tab:hover {
        color: var(--primary-color);
    }

    .tab.active {
        color: var(--primary-color);
        border-bottom-color: var(--primary-color);
    }

    /* Features Sections */
    .section {
        background-color: white;
        border-radius: 10px;
        box-shadow: var(--shadow);
        padding: 20px;
        margin-bottom: 20px;
    }

    .section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .section-title {
        font-size: 18px;
        font-weight: 600;
    }

    .more-button {
        background-color: var(--light-color);
        border: none;
        border-radius: 6px;
        padding: 6px 12px;
        font-size: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .more-button:hover {
        background-color: #ddd;
    }

    /* Tickets Section */
    .tickets-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 15px;
    }

    .ticket-card {
        border: 1px solid #eee;
        border-radius: 8px;
        padding: 15px;
        transition: all 0.3s ease;
    }

    .ticket-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow);
    }

    .ticket-image {
        width: 100%;
        height: 120px;
        border-radius: 6px;
        background-color: #eee;
        margin-bottom: 10px;
        overflow: hidden;
        position: relative;
    }

    .ticket-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .promo-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: var(--accent-color);
        color: white;
        padding: 3px 8px;
        border-radius: 4px;
        font-size: 10px;
        font-weight: bold;
    }

    .ticket-title {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .ticket-price {
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 5px;
    }

    .ticket-rating {
        display: flex;
        align-items: center;
        font-size: 12px;
        color: #888;
    }

    .rating-star {
        color: var(--accent-color);
        margin-right: 3px;
    }

    /* Navigation & Route */
    .map-container {
        width: 100%;
        height: 300px;
        background-color: #eee;
        border-radius: 8px;
        margin-bottom: 15px;
        position: relative;
        overflow: hidden;
    }

    .map-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #888;
    }

    .route-details {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .route-point {
        background-color: var(--light-color);
        padding: 10px 15px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
    }

    .route-arrow {
        margin: 0 10px;
        color: #888;
    }

    .route-metrics {
        display: flex;
        gap: 15px;
    }

    .metric {
        display: flex;
        align-items: center;
        font-size: 14px;
        color: #888;
    }

    .metric-icon {
        margin-right: 5px;
        color: var(--primary-color);
    }

    /* Travel Plan Section */
    .plan-timeline {
        position: relative;
        padding-left: 30px;
    }

    .timeline-line {
        position: absolute;
        left: 10px;
        top: 0;
        bottom: 0;
        width: 2px;
        background-color: #ddd;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 20px;
    }

    .timeline-dot {
        position: absolute;
        left: -30px;
        top: 0;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 10px;
    }

    .timeline-content {
        background-color: var(--light-color);
        border-radius: 8px;
        padding: 15px;
    }

    .timeline-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .timeline-title {
        font-weight: 600;
    }

    .timeline-time {
        font-size: 12px;
        color: #888;
    }

    .timeline-description {
        font-size: 14px;
    }

    /* Cost Estimation */
    .cost-summary {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
    }

    .cost-card {
        flex: 1;
        background-color: var(--light-color);
        border-radius: 8px;
        padding: 15px;
        text-align: center;
    }

    .cost-title {
        font-size: 14px;
        color: #888;
        margin-bottom: 5px;
    }

    .cost-value {
        font-size: 20px;
        font-weight: 700;
    }

    .cost-breakdown {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .cost-breakdown th,
    .cost-breakdown td {
        padding: 10px 15px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    .cost-breakdown th {
        font-weight: 600;
        color: #888;
        font-size: 14px;
    }

    /* Destinations */
    .destination-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .destination-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: var(--shadow);
    }

    .destination-image {
        width: 100%;
        height: 160px;
        position: relative;
    }

    .destination-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .destination-favorite {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .favorite-icon {
        color: #888;
    }

    .favorite-icon.active {
        color: var(--danger-color);
    }

    .destination-info {
        padding: 15px;
        background-color: white;
    }

    .destination-title {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .destination-location {
        display: flex;
        align-items: center;
        color: #888;
        font-size: 12px;
        margin-bottom: 10px;
    }

    .location-icon {
        margin-right: 5px;
    }

    .destination-meta {
        display: flex;
        justify-content: space-between;
    }

    .meta-rating {
        display: flex;
        align-items: center;
    }

    .destination-price {
        font-weight: 600;
        color: var(--primary-color);
    }

    /* Reviews */
    .review-item {
        display: flex;
        margin-bottom: 20px;
    }

    .reviewer-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #eee;
        margin-right: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        color: #888;
    }

    .review-content {
        flex-grow: 1;
    }

    .reviewer-name {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .review-date {
        font-size: 12px;
        color: #888;
        margin-bottom: 10px;
    }

    .review-text {
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    .review-rating {
        display: flex;
    }

    .review-star {
        color: var(--accent-color);
        margin-right: 2px;
    }
    .submit-button {
        background-color: #4CAF50;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .submit-button:hover {
        background-color: #45a049;
    }

    #map {
        width: 100%;
        height: 500px;
        margin-top: 20px;
    }
    .route-point-dropdown {
        margin: 5px;
        padding: 5px;
    }
    .submit-button {
        padding: 5px 10px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }

        .sidebar {
            width: 100%;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            margin-bottom: 10px;
        }

        .nav-menu {
            display: none;
        }

        .cards-container {
            grid-template-columns: 1fr;
        }

        .destination-cards {
            grid-template-columns: 1fr;
        }

        .cost-summary {
            flex-direction: column;
        }

    }
</style>
@endsection
