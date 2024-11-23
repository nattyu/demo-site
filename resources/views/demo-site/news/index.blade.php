@extends('layouts.app')

@section('title', 'お知らせ | サンプルサイト')

@section('content')
<div class="bg-gray-50 p-6">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">最新のお知らせ</h1>
    <ul class="space-y-4">
        <li>
            <a href="/demo-site/news/news1" class="text-blue-500 hover:underline">
                お知らせ1 - 〇〇〇〇〇〇〇〇〇
            </a>
        </li>
        <li>
            <a href="/demo-site/news/news2" class="text-blue-500 hover:underline">
                お知らせ2 - 〇〇〇〇〇〇〇〇〇
            </a>
        </li>
        <li>
            <a href="/demo-site/news/news3" class="text-blue-500 hover:underline">
                お知らせ3 - 〇〇〇〇〇〇〇〇〇
            </a>
        </li>
    </ul>
</div>
@endsection
