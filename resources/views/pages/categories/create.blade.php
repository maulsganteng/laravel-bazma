@section('pageTitle', 'Buat Kategori')
@extends('app.app')
@section('content')
    @if ($errors->any())
    @endif
    <div class="container-xl">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        <div class="row row-cards">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Buat Kategori
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('perpus.categories.index') }}" class="btn">Back</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form action="{{ route('perpus.categories.store') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label required">Nama Kategori</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{Session::get('name')}}"placeholder="Input Nama Kategori">
                                </div>
                                <button class="btn btn-primary">Create </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
