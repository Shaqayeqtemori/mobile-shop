<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div style="height: 100vh; display: flex ; justify-content: center; align-items: center">
            <h1 style="text-align: center ; font-size: 150px ; color: rebeccapurple "  >پنــل مبايــــل فــــــــروشــــی</h1>
          <html lang="fa" dir="rtl">
<head>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>داشبورد - شباهت کامل به عکس</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
  <style>
    @font-face{font-family:Vazirmatn;src:local('Vazirmatn'), local('Vazirmed');}
    body{font-family:Vazirmatn, Tahoma, sans-serif;background:#f6f8ff;padding:24px}

    .card{position:relative;overflow:hidden;border-radius:18px;min-height:140px}
    .card-inner{position:relative;z-index:2}

    /* نیم‌دایره رنگی در گوشه پایین-چپ */
    .card::after{
      content:'';position:absolute;left:0;bottom:0;width:220px;height:220px;border-radius:50%;opacity:0.14;z-index:1;box-shadow:inset 0 0 0 1px rgba(255,255,255,0.02)
    }

    /* پراکندگی و گرید */
    .shadow-soft{box-shadow: 0 6px 14px rgba(37,99,235,0.08), 0 2px 6px rgba(2,6,23,0.03)}
    .border-soft{border:1px solid rgba(99,102,241,0.07)}

    .spark{height:52px!important}

    /* رنگ‌های نیم‌دایره برای هر کارت (بر اساس عکس) */
    .c-pink::after{background: radial-gradient(circle at 30% 70%, rgba(236,72,153,0.14) 0%, rgba(236,72,153,0.04) 40%, transparent 60%)}
    .c-purple::after{background: radial-gradient(circle at 30% 70%, rgba(139,92,246,0.14) 0%, rgba(139,92,246,0.03) 40%, transparent 60%)}
    .c-sky::after{background: radial-gradient(circle at 30% 70%, rgba(59,130,246,0.12) 0%, rgba(59,130,246,0.02) 40%, transparent 60%)}
    .c-orange::after{background: radial-gradient(circle at 30% 70%, rgba(249,115,22,0.12) 0%, rgba(249,115,22,0.02) 40%, transparent 60%)}
    .c-indigo::after{background: radial-gradient(circle at 30% 70%, rgba(99,102,241,0.12) 0%, rgba(99,102,241,0.02) 40%, transparent 60%)}
    .c-violet::after{background: radial-gradient(circle at 30% 70%, rgba(168,85,247,0.12) 0%, rgba(168,85,247,0.02) 40%, transparent 60%)}

    /* عدد بزرگ در پایین سمت راست */
    .value{font-weight:800;font-size:28px}
    .title{font-size:16px;font-weight:700}

    /* آیکون دایره‌ای بالا سمت راست */
    .icon-circle{width:44px;height:44px;border-radius:10px;display:flex;align-items:center;justify-content:center}

    /* حالت responsive */
    @media (min-width:1024px){ .card{min-height:150px} }
  </style>
</head>
<body>
  <div class="max-w-[1250px] mx-auto">
    <!-- سربرگ کوچک -->
    <div class="flex items-center gap-4 mb-6">
      <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-white shadow-md">
        <img src="/mnt/data/Screenshot 2025-11-21 211146.png" alt="avatar" class="w-full h-full object-cover"/>
      </div>
      <div>
        <div class="text-sm text-gray-500">سلام، خوش آمدی</div>
        <div class="font-bold text-lg">داشبورد</div>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

      <!-- کارت‌ها با کلاس رنگی برای نیم‌دایره و تنظیم رنگ گراف -->
      <div class="card bg-white shadow-soft border-soft c-pink p-4">
        <div class="card-inner flex justify-between items-start">
          <div>
            <div class="text-xs text-gray-500">تعداد کاربران</div>
            <div class="mt-2 value">10</div>
          </div>
          <div class="icon-circle" style="background:#ffe6f2">
            <!-- آیکون کاربران -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m0-4a4 4 0 11-8 0 4 4 0 018 0zm8 0a4 4 0 11-8 0 4 4 0 018 0z"/>
            </svg>
          </div>
        </div>
        <div class="mt-3 flex items-center justify-between">
          <canvas id="chart-0" class="spark w-full"></canvas>
          <div class="text-xs text-gray-400 mr-3">20.8%</div>
        </div>
      </div>

      <div class="card bg-white shadow-soft border-soft c-purple p-4">
        <div class="card-inner flex justify-between items-start">
          <div>
            <div class="text-xs text-gray-500">فروش روزانه</div>
            <div class="mt-2 value">₪75,000</div>
          </div>
          <div class="icon-circle" style="background:#f3e8ff">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-2.2 0-4 1.8-4 4s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4z"/></svg>
          </div>
        </div>
        <div class="mt-3 flex items-center justify-between">
          <canvas id="chart-1" class="spark w-full"></canvas>
          <div class="text-xs text-gray-400 mr-3">80.7%</div>
        </div>
      </div>

      <div class="card bg-white shadow-soft border-soft c-sky p-4">
        <div class="card-inner flex justify-between items-start">
          <div>
            <div class="text-xs text-gray-500">تعداد مشتریان</div>
            <div class="mt-2 value">200</div>
          </div>
          <div class="icon-circle" style="background:#e6f5ff">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zM6 20v-1a4 4 0 014-4h4a4 4 0 014 4v1"/></svg>
          </div>
        </div>
        <div class="mt-3 flex items-center justify-between">
          <canvas id="chart-2" class="spark w-full"></canvas>
          <div class="text-xs text-gray-400 mr-3">20.8%</div>
        </div>
      </div>

      <div class="card bg-white shadow-soft border-soft c-orange p-4">
        <div class="card-inner flex justify-between items-start">
          <div>
            <div class="text-xs text-gray-500">فایده روزانه</div>
            <div class="mt-2 value">₪75,000</div>
          </div>
          <div class="icon-circle" style="background:#fff4e6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v8M8 12h8"/></svg>
          </div>
        </div>
        <div class="mt-3 flex items-center justify-between">
          <canvas id="chart-3" class="spark w-full"></canvas>
          <div class="text-xs text-gray-400 mr-3">80.7%</div>
        </div>
      </div>

      <div class="card bg-white shadow-soft border-soft c-indigo p-4">
        <div class="card-inner flex justify-between items-start">
          <div>
            <div class="text-xs text-gray-500">مجموعه سرمایه دوکان</div>
            <div class="mt-2 value">₪75,000</div>
          </div>
          <div class="icon-circle" style="background:#eef2ff">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7h18M3 12h18M3 17h18"/></svg>
          </div>
        </div>
        <div class="mt-3 flex items-center justify-between">
          <canvas id="chart-4" class="spark w-full"></canvas>
          <div class="text-xs text-gray-400 mr-3">80.7%</div>
        </div>
      </div>

      <div class="card bg-white shadow-soft border-soft c-violet p-4">
        <div class="card-inner flex justify-between items-start">
          <div>
            <div class="text-xs text-gray-500">مصارف امروز</div>
            <div class="mt-2 value">₪75,000</div>
          </div>
          <div class="icon-circle" style="background:#fbf0ff">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-violet-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4z"/></svg>
          </div>
        </div>
        <div class="mt-3 flex items-center justify-between">
          <canvas id="chart-5" class="spark w-full"></canvas>
          <div class="text-xs text-gray-400 mr-3">20.8%</div>
        </div>
      </div>

      <div class="card bg-white shadow-soft border-soft c-sky p-4">
        <div class="card-inner flex justify-between items-start">
          <div>
            <div class="text-xs text-gray-500">مجموعه قرضه‌ها</div>
            <div class="mt-2 value">₪75,000</div>
          </div>
          <div class="icon-circle" style="background:#eef9ff">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7h18M3 12h18M3 17h18"/></svg>
          </div>
        </div>
        <div class="mt-3 flex items-center justify-between">
          <canvas id="chart-6" class="spark w-full"></canvas>
          <div class="text-xs text-gray-400 mr-3">80.7%</div>
        </div>
      </div>

      <div class="card bg-white shadow-soft border-soft c-indigo p-4">
        <div class="card-inner flex justify-between items-start">
          <div>
            <div class="text-xs text-gray-500">موجودی کل اجناس</div>
            <div class="mt-2 value">7,500</div>
          </div>
          <div class="icon-circle" style="background:#eef2ff">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7h18M3 12h18M3 17h18"/></svg>
          </div>
        </div>
        <div class="mt-3 flex items-center justify-between">
          <canvas id="chart-7" class="spark w-full"></canvas>
          <div class="text-xs text-gray-400 mr-3">20.8%</div>
        </div>
      </div>

    </div>
  </div>

<script>
  // نمونه داده کلی
  const base = [8,12,9,14,11,15,12,13,11];

  // رنگ خطوط برای هر کارت مشابه عکس
  const colors = [
    {line:'rgba(236,72,153,0.95)',area:'rgba(236,72,153,0.16)'}, // pink
    {line:'rgba(139,92,246,0.95)',area:'rgba(139,92,246,0.14)'}, // purple
    {line:'rgba(59,130,246,0.95)',area:'rgba(59,130,246,0.12)'}, // sky
    {line:'rgba(249,115,22,0.95)',area:'rgba(249,115,22,0.12)'}, // orange
    {line:'rgba(99,102,241,0.95)',area:'rgba(99,102,241,0.12)'}, // indigo
    {line:'rgba(168,85,247,0.95)',area:'rgba(168,85,247,0.12)'}, // violet
    {line:'rgba(59,130,246,0.95)',area:'rgba(59,130,246,0.12)'}, // sky
    {line:'rgba(99,102,241,0.95)',area:'rgba(99,102,241,0.12)'}  // indigo
  ];

  // تابع ساخت sparkline که شبیه PNG داخل عکس می‌سازد
  function makeSpark(id, idx){
    const ctx = document.getElementById(id).getContext('2d');
    const gradient = ctx.createLinearGradient(0,0,0,60);
    gradient.addColorStop(0, colors[idx].area);
    gradient.addColorStop(1, 'rgba(255,255,255,0)');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: base.map((_,i)=>i+1),
        datasets: [{
          data: base.map((v,i)=> v + (i%2? 1 : -1) + (idx%3)),
          fill: true,
          backgroundColor: gradient,
          borderColor: colors[idx].line,
          tension: 0.45,
          pointRadius: 0,
          borderWidth: 2
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: { x: { display: false }, y: { display: false } },
        elements: { line: { cap: 'round' } },
        interaction: { intersect: false }
      }
    });
  }

  // مقداردهی همه گراف‌ها
  for(let i=0;i<8;i++) makeSpark('chart-'+i, i);
</script>
</body>
</html>
</body>
</html>
