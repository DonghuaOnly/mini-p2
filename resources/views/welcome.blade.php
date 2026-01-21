<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome</title>
  <style>
    body{
      font-family: Arial, Helvetica, sans-serif;
      margin:0;
      background:#0b1220;
      color:#e5e7eb;
    }
    header, footer{
      background: linear-gradient(90deg, #1f2937, #111827);
      border-bottom: 1px solid rgba(255,255,255,.08);
      text-align:center;
      padding:26px 16px;
    }
    footer{
      border-top: 1px solid rgba(255,255,255,.08);
      border-bottom:none;
    }
    .wrap{
      max-width:900px;
      margin:30px auto;
      padding:0 16px;
    }
    .card{
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.10);
      border-radius:18px;
      padding:24px;
      box-shadow: 0 16px 40px rgba(0,0,0,.35);
    }
    .tag{
      display:inline-block;
      font-size:12px;
      font-weight:700;
      letter-spacing:.3px;
      padding:6px 10px;
      border-radius:999px;
      background: rgba(34,197,94,.16);
      border:1px solid rgba(34,197,94,.35);
      color:#bbf7d0;
      margin-bottom:14px;
    }
    h1{margin:0; font-size:30px;}
    p{line-height:1.7; margin:10px 0 0;}
    .grid{
      display:grid;
      grid-template-columns: 1fr 1fr;
      gap:14px;
      margin-top:16px;
    }
    .box{
      background: rgba(255,255,255,.05);
      border: 1px solid rgba(255,255,255,.08);
      border-radius:14px;
      padding:16px;
    }
    .box h2{
      margin:0 0 8px;
      font-size:16px;
      color:#f9fafb;
    }
    .muted{color:#cbd5e1;}
    @media (max-width:820px){
      .grid{grid-template-columns:1fr;}
    }
  </style>
</head>

<body>
  <header>
    <h1>👋 Welcome to My Laravel Mini Project</h1>
    <p class="muted" style="margin-top:6px;">A simple demo page for my class submission</p>
  </header>

  <div class="wrap">
    <div class="card">
      <div class="tag">Mini Project</div>

      <p>
        Hi! My name is <strong>Chanboth</strong>.im a <strong>AI Engineer</strong> at <strong>neWwave</strong>,
        and I love building products with code.

      <div class="grid">
        <div class="box">
          <h2>What I enjoy</h2>
          <p class="muted">Coding, learning new frameworks, and turning ideas into working projects.</p>
        </div>

        <div class="box">
          <h2>Why Laravel</h2>
          <p class="muted">Laravel helps me build web apps faster with clean routing, views, and a strong structure.</p>
        </div>
      </div>

      <div class="box" style="margin-top:14px;">
        <h2>Project note</h2>
        <p class="muted">
          This page is part of my Laravel mini project submission <strong>2</strong> in Laravel
        </p>
      </div>
    </div>
  </div>

  <footer>
    <p style="margin:0;" class="muted">© 2026 • Built with Laravel • neWwave</p>
  </footer>
</body>
</html>
