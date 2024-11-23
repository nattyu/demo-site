@extends('layouts.app')

@section('title', 'よくある質問 | サンプルサイト')

@section('content')
<div class="bg-gray-100 py-10">
    <div class="container mx-auto max-w-4xl">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">よくある質問</h1>
        <div class="space-y-6">
            <!-- 質問1 -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800">
                    Q: 〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
                </h2>
                <p class="text-gray-600 mt-2">
                    A: 〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
                </p>
            </div>
            <!-- 質問2 -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800">
                    Q: 〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
                </h2>
                <p class="text-gray-600 mt-2">
                    A: 〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
                </p>
            </div>
            <!-- 質問3 -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800">
                    Q: 〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
                </h2>
                <p class="text-gray-600 mt-2">
                    A: 〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
                </p>
            </div>
            <!-- 質問4 -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800">
                    Q: 〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
                </h2>
                <p class="text-gray-600 mt-2">
                    A: 〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
