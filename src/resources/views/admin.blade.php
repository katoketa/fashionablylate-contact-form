@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin-page">
    <div class="admin-page__title">
        <h2 class="admin-page__title-text">Admin</h2>
    </div>
    <div class="contacts-search">
        <form action="/search" method="get" class="search-form">
            @csrf
            <input type="text" name="keyword" class="search__keyword" placeholder="名前やメールアドレスを入力してください">
            <select name="gender" id="" class="search__gender">
                <option value="" selected hidden>性別</option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>
            <select name="category_id" class="search__category">
                <option value="" selected hidden>お問い合わせの種類</option>
                @foreach ($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                @endforeach
            </select>
            <input type="date" name="created_at" class="search__date" placeholder="年/月/日">
            <button type="submit" class="search-form__button">検索</button>
        </form>
        <form action="/reset" method="get" class="search-reset">
            @csrf
            <button type="submit" class="search-reset__button">リセット</button>
        </form>
    </div>
    <div class="admin-utilities">
        <button type="submit" class="admin-export__button">エクスポート</button>
        <div class="admin-paginate">{{ $contacts->links() }}</div>
    </div>
    <table class="contacts-table">
        <tr class="contacts-table__row--header">
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr class="contacts-table__row">
            <td class="contacts-table__item">{{ $contact['name'] }}</td>
            <td class="contacts-table__item">{{ $contact['gender'] }}</td>
            <td class="contacts-table__item">{{ $contact['email'] }}</td>
            <td class="contacts-table__item">{{ $contact['category']['content'] }}</td>
            <td class="contacts-table__item">
                <dialog class="contacts-table__modal"></dialog>
                <button id="showDialog">詳細</button>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection