@extends('layouts.app')

@section('content')
<div class="bg-white p-6 shadow rounded max-w-md mx-auto">
    <h1 class="text-2xl font-bold text-gray-900 mb-4">お問い合わせ</h1>
    <form action="/demo-site/contact/complete" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">氏名</label>
            <input type="text" name="name" id="name" class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
        <div>   
            <label for="email" class="block text-sm font-medium text-gray-700">メールアドレス</label>
            <input type="email" name="email" id="email" class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
        <div>
            <label for="message" class="block text-sm font-medium text-gray-700">お問い合わせ内容</label>
            <textarea name="message" id="message" class="mt-1 p-2 border border-gray-300 rounded w-full"></textarea>
        </div>
        <button type="submit" class="w-full py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">
            送信する
        </button>
    </form>
</div>
@endsection
