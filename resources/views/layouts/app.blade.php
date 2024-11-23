<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'サンプルサイト')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-blue-500 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-4 md:px-6">
            <!-- ロゴ -->
            <a href="/" class="text-2xl font-bold">サンプルサイト</a>
            
            <!-- ハンバーガーボタン（モバイル用） -->
            <button id="menu-toggle" class="block md:hidden text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
    
            <!-- ナビゲーションメニュー -->
            <nav id="menu" class="hidden md:flex space-x-4 items-center">
                <a href="/" class="hover:underline">ホーム</a>
                <a href="/services" class="hover:underline">サービス</a>
                <a href="/news" class="hover:underline">お知らせ</a>
                <a href="/about" class="hover:underline">会社概要</a>
                <a href="/contact" class="hover:underline">お問い合わせ</a>
            </nav>
        </div>
    
        <!-- モバイル用ナビゲーションメニュー -->
        <nav id="mobile-menu" class="hidden md:hidden bg-blue-600 text-white space-y-2 p-4">
            <a href="/" class="block hover:underline">ホーム</a>
            <a href="/services" class="block hover:underline">サービス</a>
            <a href="/news" class="block hover:underline">お知らせ</a>
            <a href="/about" class="block hover:underline">会社概要</a>
            <a href="/contact" class="block hover:underline">お問い合わせ</a>
        </nav>
    </header>

    <main class="container mx-auto mt-6">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-10 px-5">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- サービス一覧 -->
            <div>
                <h2 class="text-lg font-semibold mb-4 border-b border-gray-700 pb-2">サービス一覧</h2>
                <ul class="space-y-2">
                    <li><a href="/services/service1" class="hover:underline">サービス１</a></li>
                    <li><a href="/services/service2" class="hover:underline">サービス２</a></li>
                    <li><a href="/services/service3" class="hover:underline">サービス３</a></li>
                    <li><a href="/services/FAQ" class="hover:underline">サービスについてのよくある質問</a></li>
                </ul>
            </div>
            
            <!-- お知らせ一覧 -->
            <div>
                <h2 class="text-lg font-semibold mb-4 border-b border-gray-700 pb-2">お知らせ一覧</h2>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <span class="text-gray-400 text-sm mr-2">news1</span>
                        <a href="/news/news1" class="hover:underline flex-1">〇〇〇〇〇〇〇〇〇</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-gray-400 text-sm mr-2">news2</span>
                        <a href="/news/news2" class="hover:underline flex-1">〇〇〇〇〇〇〇〇〇</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-gray-400 text-sm mr-2">news3</span>
                        <a href="/news/news3" class="hover:underline flex-1">〇〇〇〇〇〇〇〇〇</a>
                    </li>
                </ul>
            </div>
            
            <!-- About -->
            <div>
                <h2 class="text-lg font-semibold mb-4 border-b border-gray-700 pb-2">About</h2>
                <ul class="space-y-2">
                    <li><a href="/about" class="hover:underline flex items-center">運営会社 <span class="ml-auto">&rarr;</span></a></li>
                    <li><a href="/privacy-policy" class="hover:underline flex items-center">プライバシーポリシー <span class="ml-auto">&rarr;</span></a></li>
                </ul>
            </div>
        </div>
        
        <!-- 著作権表示 -->
        <div class="text-center text-gray-500 text-sm mt-10">
            &copy; {{ date('Y') }} natsuki inoue.
        </div>
        
        <!-- スクロールアップボタン -->
        <div class="fixed bottom-4 right-4">
            <a href="#" class="flex items-center justify-center w-10 h-10 bg-gray-800 rounded-full text-white shadow hover:bg-gray-700">
                &uarr;
            </a>
        </div>
    </footer>    
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
</html>
