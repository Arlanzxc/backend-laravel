<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Assignment 4</title>

    <style>
    :root {
        --primary: #4f46e5;
        --bg: #f1f5f9;
        --text-main: #0f172a;
        --text-muted: #64748b;
        --card-bg: #ffffff;
    }

    body { 
        font-family: 'Inter', system-ui, sans-serif; 
        margin: 0; 
        background-color: var(--bg); 
        color: var(--text-main);
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        justify-content: center;
    }

    .container { 
        max-width: 600px; 
        margin: 2rem auto; 
        background: var(--card-bg); 
        padding: 3rem; 
        border-radius: 24px; 
        box-shadow: 0 20px 25px -5px rgba(0,0,0,0.05), 0 10px 10px -5px rgba(0,0,0,0.02);
        border: 1px solid rgba(255, 255, 255, 0.7);
    }

    h1 { 
        font-size: 2.5rem; 
        font-weight: 800; 
        margin-bottom: 0.5rem; 
        color: var(--primary);
        letter-spacing: -0.025em;
    }

    .subtitle { 
        color: var(--text-muted); 
        font-size: 1.1rem; 
        margin-bottom: 2rem; 
    }

    .course-list {
        list-style: none;
        padding: 0;
    }

    .course-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 16px;
        margin-bottom: 8px;
        background: #f8fafc;
        border-radius: 12px;
        transition: transform 0.2s;
    }

    .course-item:hover {
        transform: translateX(5px);
        background: #f1f5f9;
    }

    .badge { 
        background: #dcfce7; 
        color: #166534; 
        padding: 6px 12px; 
        border-radius: 99px; 
        font-size: 0.7rem; 
        font-weight: 700;
        text-transform: uppercase;
    }

    .status-msg {
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid #e2e8f0;
        font-weight: 500;
        color: var(--primary);
    }

    .footer { 
        text-align: center; 
        margin-top: auto; 
        padding: 2rem;
        font-size: 0.9rem; 
        color: var(--text-muted); 
    }
</style>
</head>
<body>


<div class="container">
    @yield('content')
</div>

<div class="footer">
    <p>2026 KBTU</p>
</div>

</body>
</html>
