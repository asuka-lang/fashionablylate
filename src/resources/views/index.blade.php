@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection
@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2 class="contact-form__heading-logo">Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="input-name" type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}" />
                    <input class="input-name" type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}" />
                </div>
                <div class="form__error">
                    @error('last_name')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form__error">
                    @error('first_name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="input-gender" type="radio" name="gender" id="1" value="男性" checked />
                    <label class="radio-label" for="1">男性</label>
                    <input class="input-gender" type="radio" name="gender" id="2" value="女性" />
                    <label class="radio-label" for="2">女性</label>
                    <input class="input-gender" type="radio" name="gender" id="3" value="その他" />
                    <label class="radio-label" for="3">その他</label>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="input-email" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="input-tell" type="tel" name="tell1" placeholder="080" value="{{ old('tell1') }}"  />
                    <label> - <input class="input-tell" type="tel" name="tell2" placeholder="1234" value="{{ old('tell2') }}" /></label>
                    <label> - <input class="input-tell" type="tel" name="tell3" placeholder="5678" value="{{ old('tell3') }}" /></label>
                </div>
                <div class="form__error">
                    @error('tell1')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form__error">
                    @error('tell2')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form__error">
                    @error('tell3')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="input-address" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="input-building" type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <select class="form__select--item" name="category_id">
                        <option value="">選択してください</option>
                        @foreach($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form__error">
                    @error('category_id')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea class="textarea" name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit">確認画面</button>
        </div>
    </form>
</div>
@endsection
</body>
