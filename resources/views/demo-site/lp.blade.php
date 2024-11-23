@extends('layouts.app')

@section('title', '特別キャンペーン | サンプルサイト')

@section('content')
<div class="bg-gray-100 p-6 text-center">
    <h1 class="text-4xl font-bold text-blue-600 mb-4">特別キャンペーン開催中！</h1>
    <p class="text-lg text-gray-700 mb-6">
        今だけ限定の特別なオファーをご利用ください。
    </p>
    <a href="/demo-site/contact" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
        詳細はこちら
    </a>
</div>
@endsection
