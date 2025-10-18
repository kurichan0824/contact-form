@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="auth-container">
            <div class="auth-header">
                <h2 class="mb-0">🔐 Login</h2>
            </div>
            <div class="auth-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- メールアドレス -->
                    <div class="mb-4">
                        <label for="email" class="form-label fw-semibold">メールアドレス</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                               placeholder="example@mail.com">
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- パスワード -->
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">パスワード</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                               name="password" required autocomplete="current-password"
                               placeholder="パスワードを入力">
                        @error('password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- ログインボタン -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary btn-lg">
                            🔑 ログイン
                        </button>
                    </div>

                    <!-- 登録リンク -->
                    <div class="text-center">
                        <a href="{{ route('register') }}" class="text-decoration-none">
                            新規登録はこちら
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection