@extends('layouts.app')

@section('title', 'お問い合わせ完了 | サンプルサイト')

@section('content')
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">お問い合わせありがとうございました</h1>
        <p class="text-gray-600 mb-6">
            お問い合わせ内容を確認の上、担当者よりご連絡いたします。返信には少々お時間をいただく場合がございます。
        </p>
        <a href="/demo-site" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            ホームへ戻る
        </a>
    </div>
</div>
@endsection
