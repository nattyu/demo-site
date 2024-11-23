@extends('layouts.app')

@section('title', 'アクセス解析 | サンプルサイト')

@section('content')
<div class="bg-gray-100 py-10">
    <div class="container mx-auto max-w-4xl">
        <!-- ページヘッダー -->
        <header class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">サービス名</h1>
            <p class="text-gray-600">〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</p>
        </header>

        <!-- セクション1: サービスの概要 -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">サービス概要</h2>
            <p class="text-gray-700 leading-relaxed">
                〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
            </p>
        </section>

        <!-- セクション2: 提供する内容 -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">提供する内容</h2>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</li>
                <li>〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</li>
                <li>〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</li>
                <li>〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</li>
                <li>〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</li>
            </ul>
        </section>

        <!-- セクション3: 制作の流れ -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">サービスの流れ</h2>
            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="text-blue-500 font-bold text-xl mr-4">1</div>
                    <p class="text-gray-700">〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</p>
                </div>
                <div class="flex items-start">
                    <div class="text-blue-500 font-bold text-xl mr-4">2</div>
                    <p class="text-gray-700">〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</p>
                </div>
                <div class="flex items-start">
                    <div class="text-blue-500 font-bold text-xl mr-4">3</div>
                    <p class="text-gray-700">〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</p>
                </div>
                <div class="flex items-start">
                    <div class="text-blue-500 font-bold text-xl mr-4">4</div>
                    <p class="text-gray-700">〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</p>
                </div>
            </div>
        </section>

        <!-- セクション4: 料金プラン -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">料金プラン</h2>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left">プラン名</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">内容</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">料金</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">ベーシックプラン</td>
                        <td class="border border-gray-300 px-4 py-2">〇〇〇〇〇〇〇〇〇</td>
                        <td class="border border-gray-300 px-4 py-2">100,000円</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">スタンダードプラン</td>
                        <td class="border border-gray-300 px-4 py-2">〇〇〇〇〇〇〇〇〇</td>
                        <td class="border border-gray-300 px-4 py-2">200,000円</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">プレミアムプラン</td>
                        <td class="border border-gray-300 px-4 py-2">〇〇〇〇〇〇〇〇〇</td>
                        <td class="border border-gray-300 px-4 py-2">300,000円</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- セクション5: お問い合わせボタン -->
        <div class="text-center">
            <a href="/demo-site/contact" class="inline-block bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600">
                このサービスについて問い合わせる
            </a>
        </div>
    </div>
</div>
@endsection
