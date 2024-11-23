@extends('layouts.app')

@section('title', 'お知らせ詳細 | サンプルサイト')

@section('content')
<div class="bg-white p-6 shadow rounded max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-900 mb-4">{{ $slug }} のお知らせ</h1>
    <p class="text-gray-700">
        〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
    </p>
    <p class="text-gray-700">
        〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
    </p>
    <p class="text-gray-700">
        〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
    </p>
    <p class="text-gray-700">
        〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
    </p>
    <p class="text-gray-700">
        〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
    </p>
    <a href="/news" class="mt-4 inline-block text-blue-500 hover:underline">
        お知らせ一覧に戻る
    </a>
</div>
@endsection
