<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TicketPro · Support Ticket System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: linear-gradient(135deg, #1e293b, #0f172a);
            color: #e5e7eb;
        }

        
        header {
            padding: 2rem;
            text-align: center;
            background: rgba(15, 23, 42, 0.8);
            box-shadow: 0 4px 10px rgba(0,0,0,.3);
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
            color: #38bdf8;
        }

        header p {
            margin-top: .5rem;
            font-size: 1.1rem;
            color: #cbd5f5;
        }

        main {
            padding: 3rem 1.5rem;
            max-width: 1100px;
            margin: auto;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 2rem;
        }

        .card {
            background: rgba(30, 41, 59, 0.9);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            transition: transform .2s, box-shadow .2s;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0,0,0,.4);
        }

        .card h2 {
            margin-bottom: 1rem;
            color: #7dd3fc;
        }

        .card p {
            font-size: .95rem;
            color: #d1d5db;
        }

        .card a {
            display: inline-block;
            margin-top: 1.5rem;
            padding: .6rem 1.4rem;
            border-radius: 999px;
            text-decoration: none;
            background: #38bdf8;
            color: #0f172a;
            font-weight: bold;
        }

        .card a:hover {
            background: #0ea5e9;
        }

        footer {
            text-align: center;
            padding: 1.5rem;
            font-size: .85rem;
            color: #94a3b8;
        }
    </style>
</head>
<body>

<header>
    <h1>🎟️ TicketPro</h1>
    <p>Professional Support Ticket Management</p>
</header>

<main>
    <div class="grid">

        <div class="card">
            <h2>View Tickets</h2>
            <p>Browse all existing support tickets and check their current status.</p>
            <a href="{{ url('/tickets') }}">Go</a>
        </div>

        <div class="card">
            <h2>Create Ticket</h2>
            <p>Open a new support ticket with priority and description.</p>
            <a href="{{ url('/tickets/create') }}">Go</a>
        </div>

        <div class="card">
            <h2>Open Tickets</h2>
            <p>See only tickets that are currently open.</p>
            <a href="{{ url('/tickets/status/open') }}">Go</a>
        </div>

        <div class="card">
            <h2>Closed Tickets</h2>
            <p>Review resolved and closed support tickets.</p>
            <a href="{{ url('/tickets/status/closed') }}">Go</a>
        </div>

    </div>
</main>

<footer>
    © {{ date('Y') }} TicketPro · Educational Project (Laravel MVC)
</footer>

</body>
</html>
