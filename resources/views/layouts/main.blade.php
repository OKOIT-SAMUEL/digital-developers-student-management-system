<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home — Student Management System</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500..800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: {
            fontFamily: { sans: ['Manrope', 'system-ui', 'sans-serif'], display: ['Fraunces', 'Georgia', 'serif'] },
            colors: { brand: { DEFAULT: '#0f766e', dark: '#115e59', soft: '#f0fdfa', line: '#99f6e4' }, accent: { DEFAULT: '#be123c', soft: '#fff1f2' } }
        } } };
    </script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="flex min-h-screen flex-col bg-stone-50 font-sans text-stone-900 antialiased">
    @yield('content')
       <script>lucide.createIcons();</script>
</body>
</html>