@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="auth-container">
            <div class="auth-header">
                <h2 class="mb-0">📝 Register</h2>
            </div>
            <div class="auth-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- お名前 -->
                    <div class="mb-4">
                        <label for="name" class="form-label fw-semibold">お名前</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                               placeholder="小山 洋介">
                        @error('name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- メールアドレス -->
                    <div class="mb-4">
                        <label for="email" class="form-label fw-semibold">メールアドレス</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                               name="email" value="{{ old('email') }}" required autocomplete="email"
                               placeholder="example@mail.com">
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- パスワード -->
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">パスワード</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                               name="password" required autocomplete="new-password"
                               placeholder="8文字以上で入力">
                        @error('password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- 登録ボタン -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary btn-lg">
                            ✅ 登録
                        </button>
                    </div>

                    <!-- ログインリンク -->
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            既にアカウントをお持ちの方はこちら
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection