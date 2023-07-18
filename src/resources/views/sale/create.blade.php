@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{asset('assets/css/add_sales.css')}}">
@endpush

@section('content')
    <form class="container_sales-form" action="{{ route('admin.sales.store') }}" method="pos" enctype="multipart/form-data">
        @csrf
        @method('put')

        <button class="container__cancel-btn">X</button>

        <div class="container__main-text">Створення заявки</div>

        <div class="row_sales-form">
            <label for="datetime">Виберіть дату та час:</label>
            <input type="datetime-local" class="row__input" name="datetime"/>
        </div>

        <br/>

        <div class="row_sales-form">
            <label for="duration">Тривалість хвилин прийому:</label>
            <input type="number" class="row__input" name="duration"/>
        </div>

        <br/>

        <div class="row_sales-form">
            <label for="tour">Виберіть тур:</label>
            <select class="row__input" name="tour">
            @foreach ($tours as $tour)
                <option value="{{ $tour->id }}">{{ $tour->title }}</option>
            @endforeach
            </select>
        </div>

        <br/>

        <div class="row_sales-form">
            <label for="manager">Виберіть менеджера:</label>
            <select class="row__input" name="manager">
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->last_name }}</option>
            @endforeach
            </select>
        </div>

        <br/>

        <div class="row_sales-form">
            <label for="description">Додатковий опис:</label><br/>
            <textarea class="row__input-textarea" name="description"></textarea>
        </div>

        <br/>

        <button class="container__button_submit" type="submit">Створити заявку</button>
    </form>
@endsection