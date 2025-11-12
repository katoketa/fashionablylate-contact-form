<button wire:click="openModal()" class="contacts-table__open-modal">詳細</button>
@if ($showModal)
    <div class="contacts-table__modal">
        <button wire:click="closeModal()" class="modal-close__button">×</button>
        <table class="modal-table">
            <tr class="modal-table__row">
                <th class="modal-table__header">お名前</th>
                <td class="modal-table__item">
                    <span class="modal-table__item-name">{{ $contact['last_name'] }}</span>
                    <span class="modal-table__item-name">{{ $contact['first_name'] }}</span>
                </td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">性別</th>
                <td class="modal-table__item">
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
            <tr class="modal-table__row">
                <th class="modal-table__header">メールアドレス</th>
                <td class="modal-table__item">{{ $contact['email'] }}</td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">電話番号</th>
                <td class="modal-table__item">{{ $contact['tel'] }}</td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">住所</th>
                <td class="modal-table__item">{{ $contact['address'] }}</td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">建物名
                </th>
                <td class="modal-table__item">{{ $contact['building'] }}</td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header">お問い合わせの種類</th>
                <td class="modal-table__item">{{ $contact['category']['content'] }}</td>
            </tr>
            <tr class="modal-table__row">
                <th class="modal-table__header"></th>
                <td class="modal-table__item">{{ $contact['detail'] }}</td>
            </tr>
        </table>
        <form action="/delete" method="post" class="delete-form">
            @method('DELETE')
            @csrf
            <input type="hidden" name="id" value="{{ $contact['id'] }}">
            <button type="submit" class="delete-form__button" wire:click="closeModal()">削除</button>
        </form>
    </div>
@endif