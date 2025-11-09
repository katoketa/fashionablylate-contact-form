@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="content__title">
        <h2>Confirm</h2>
    </div>
    <div class="content__item">
        <form class="confirm" action="/thanks" method="post">
            @csrf
            <table class="confirm-table">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__item">
                        <div class="confirm-table__item-name">
                            <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly>
                            <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly>
                        </div>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__item">
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly>
                        @switch ($contact['gender'])
                            @case (1)
                                男性
                                @break
                            @case (2)
                                女性
                                @break
                            @case (3)
                                その他
                                @break
                        @endswitch
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__item">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__item">
                        <div class="confirm-table__item-tel">
                            <input type="tel" name="tel1" value="{{ $contact['tel1'] }}" readonly>
                            <input type="tel" name="tel2" value="{{ $contact['tel2'] }}" readonly>
                            <input type="tel" name="tel3" value="{{ $contact['tel3'] }}" readonly>
                        </div>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__item">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__item">
                        <input type="text" name="building" value="{{ $contact['building'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__item">
                        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                        {{ $category['content'] }}
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__item">
                        <textarea name="detail" readonly>{{ $contact['detail'] }}</textarea>
                    </td>
                </tr>
            </table>
            <div class="confirm-button">
                <button type="submit" class="confirm-button__send">送信</button>
                <a href="/" class="confirm-button__back">修正</a>
            </div>
        </form>
    </div>
</div>
@endsection