@extends('layouts.app')

@section('content')
<div class="bg-gray-50 p-6">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">提供するサービス</h1>
    <ul class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <li class="p-6 bg-white shadow rounded">
            <h2 class="text-lg font-semibold text-gray-800">サービス１</h2>
            <p class="text-gray-600">〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</p>
            <a href="/services/service1" class="text-blue-500 hover:underline">詳細を見る</a>
        </li>
        <li class="p-6 bg-white shadow rounded">
            <h2 class="text-lg font-semibold text-gray-800">サービス２</h2>
            <p class="text-gray-600">〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</p>
            <a href="/services/service2" class="text-blue-500 hover:underline">詳細を見る</a>
        </li>
        <li class="p-6 bg-white shadow rounded">
            <h2 class="text-lg font-semibold text-gray-800">サービス３</h2>
            <p class="text-gray-600">〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</p>
            <a href="/services/service3" class="text-blue-500 hover:underline">詳細を見る</a>
        </li>
    </ul>
</div>
@endsection
