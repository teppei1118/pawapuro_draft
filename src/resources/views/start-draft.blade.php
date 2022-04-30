@extends('layout.common')
@section('title', 'パワプロ ドラフト')

@section('content')
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">ドラフトを始める</h1>
                <p class="col-lg-10 fs-4">メンバー間でパスワードを決定し、ドラフトを開始してください</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                {{ Form::open(['method' => 'post', 'url' => route('register'), 'class' => 'p-4 p-md-5 border rounded-3 bg-light']) }}
                <div class="form-floating mb-3">
                    {{ Form::password('password',['class' => 'form-control', 'id' => 'floatingPassword', 'placeholder' => 'Password']) }}
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="alert alert-danger" role="alert">
                    パスワードは8文字以上で設定してください。
                </div>
                {{ Form::button('URL発行', ['type' => 'submit', 'class' => 'w-100 btn btn-lg btn-primary']) }}
                <hr class="my-4">
                <small class="text-muted">パスワードを入れて開始を押すと、ドラフト用のURLが発行されます。</small>
                {{ Form::close() }}
            }
        </div>
    </div>
@endsection