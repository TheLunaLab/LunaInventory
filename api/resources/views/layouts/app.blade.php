<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LunaInventory')</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Segoe UI,Arial,sans-serif;
            background:#f3f6fb;
            display:flex;
            min-height:100vh;
            color:#1f2937;
        }

        .sidebar{
            width:260px;
            background:#111827;
            color:white;
            display:flex;
            flex-direction:column;
        }

        .logo{
            padding:24px;
            font-size:28px;
            font-weight:700;
            border-bottom:1px solid #374151;
        }

        .logo span{
            color:#3b82f6;
        }

        .menu{
            padding-top:18px;
        }

        .menu a{
            display:block;
            color:#d1d5db;
            text-decoration:none;
            padding:16px 24px;
            border-left:4px solid transparent;
            transition:.2s;
            font-weight:500;
        }

        .menu a:hover{
            background:#1f2937;
            border-left-color:#2563eb;
            color:white;
        }

        .main{
            flex:1;
            display:flex;
            flex-direction:column;
        }

        .topbar{
            background:white;
            height:70px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 35px;
            border-bottom:1px solid #e5e7eb;
        }

        .topbar h2{
            font-size:22px;
            font-weight:600;
        }

        .content{
            padding:35px;
        }

        .card{
            background:white;
            border-radius:14px;
            padding:35px;
            box-shadow:0 4px 20px rgba(0,0,0,.06);
        }

        /* ---------- Dashboard ---------- */

        .stats{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
            gap:24px;
            margin-top:30px;
            margin-bottom:50px;
        }

        .stat-card{
            background:white;
            border:1px solid #e5e7eb;
            border-radius:14px;
            padding:28px;
            transition:.25s;
            box-shadow:0 4px 15px rgba(0,0,0,.05);
        }

        .stat-card:hover{
            transform:translateY(-4px);
            box-shadow:0 12px 28px rgba(0,0,0,.10);
        }

        .stat-header{
            font-size:15px;
            color:#6b7280;
            font-weight:600;
            margin-bottom:18px;
        }

        .stat-number{
            font-size:46px;
            font-weight:700;
            color:#111827;
            line-height:1;
        }

        .stat-description{
            margin-top:12px;
            color:#9ca3af;
            font-size:14px;
        }

        /* ---------- Quick Actions ---------- */

        .quick-actions{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
            gap:20px;
        }

        .action-card{
            display:block;
            text-decoration:none;
            background:white;
            border:1px solid #e5e7eb;
            border-radius:14px;
            padding:24px;
            transition:.25s;
            box-shadow:0 4px 15px rgba(0,0,0,.05);
        }

        .action-card:hover{
            transform:translateY(-4px);
            border-color:#2563eb;
            box-shadow:0 12px 28px rgba(37,99,235,.15);
        }

        .action-title{
            font-size:18px;
            font-weight:600;
            color:#111827;
            margin-bottom:10px;
        }

        .action-text{
            color:#6b7280;
            font-size:14px;
            line-height:1.5;
        }

        .disabled{
            opacity:.65;
            cursor:default;
        }

        /* ---------- Tables ---------- */

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:25px;
        }

        th{
            background:#2563eb;
            color:white;
            padding:14px;
            text-align:left;
        }

        td{
            padding:14px;
            border-bottom:1px solid #e5e7eb;
        }

        tr:nth-child(even){
            background:#f9fafb;
        }

        tr:hover{
            background:#eef4ff;
        }

        /* ---------- Forms ---------- */

        input,
        textarea,
        select{
            width:100%;
            padding:12px;
            border:1px solid #d1d5db;
            border-radius:8px;
            margin-top:5px;
            margin-bottom:18px;
        }

        button,
        .btn{
            display:inline-block;
            background:#2563eb;
            color:white;
            text-decoration:none;
            border:none;
            border-radius:8px;
            padding:12px 22px;
            font-weight:600;
            cursor:pointer;
        }

        button:hover,
        .btn:hover{
            background:#1d4ed8;
        }

        .success{
            background:#dcfce7;
            color:#166534;
            border:1px solid #86efac;
            border-radius:8px;
            padding:16px;
            margin-bottom:25px;
        }

        .footer{
            margin-top:auto;
            text-align:center;
            padding:25px;
            color:#6b7280;
            font-size:14px;
        }

    </style>

</head>

<body>

<div class="sidebar">

    <div class="logo">
        <span>Luna</span>Inventory
    </div>

    <div class="menu">

        <a href="/">Dashboard</a>

        <a href="/computers">Computers</a>

        <a href="/computers/create">Add Computer</a>

        <a href="#">Employees</a>

        <a href="#">Licenses</a>

    </div>

</div>

<div class="main">

    <div class="topbar">

        <h2>@yield('page-title','Dashboard')</h2>

        <div>
            Jorge Luna
        </div>

    </div>

    <div class="content">

        <div class="card">

            @yield('content')

        </div>

    </div>

    <div class="footer">

        LunaInventory • Laravel • Docker • MySQL

    </div>

</div>

</body>
</html>