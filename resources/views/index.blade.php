@extends('layouts.app')

@section('content')
<div class="bg-gray-100 p-6">
    <header class="text-center mb-8">
        <h1 class="text-4xl font-bold text-blue-600">ようこそ！</h1>
        <p class="text-lg text-gray-700">私たちのサービスをご覧ください。</p>
    </header>
    <section class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-800">サービス紹介</h2>
        <ul class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
            <li class="p-4 bg-white shadow rounded">
                <a href="/services/service1" class="text-blue-500 hover:underline">サービス１</a>
            </li>
            <li class="p-4 bg-white shadow rounded">
                <a href="/services/service2" class="text-blue-500 hover:underline">サービス２</a>
            </li>
            <li class="p-4 bg-white shadow rounded">
                <a href="/services/service3" class="text-blue-500 hover:underline">サービス３</a>
            </li>
        </ul>
    </section>
    <section class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-800">最新のお知らせ</h2>
        <ul class="list-disc pl-5 mt-4">
            <li><a href="/news/news1" class="text-blue-500 hover:underline">お知らせ1</a></li>
            <li><a href="/news/news2" class="text-blue-500 hover:underline">お知らせ2</a></li>
            <li><a href="/news/news3" class="text-blue-500 hover:underline">お知らせ3</a></li>
        </ul>
    </section>
    <section class="text-center">
        <a href="/contact" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">お問い合わせはこちら</a>
    </section>
</div>
@endsection
