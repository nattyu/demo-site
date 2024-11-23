@extends('layouts.app')

@section('title', '利用規約 | サンプルサイト')

@section('content')
<div class="bg-white p-6 shadow rounded max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">利用規約</h1>
    <p class="text-gray-700 mb-4">
        本サイトをご利用いただく際の規約を以下に記載します。
    </p>
    <ul class="list-disc pl-5 text-gray-700 space-y-2">
        <li>本サービスの利用条件</li>
        <li>ユーザー責任について</li>
        <li>免責事項</li>
        <li>準拠法と裁判管轄</li>
    </ul>
    <p class="text-gray-700 mt-4">
        詳細はお問い合わせください。
    </p>
</div>
@endsection
