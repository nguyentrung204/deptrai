@extends('layouts.master')

@section('title', trans('login.title'))

@section('content')


@section('js')


@stop

<div class="row" id="company" style="margin-top: 20px">
    <div class="col-lg-6">
        <div class="item-company ">
            <div class="item-image col-lg-3">
                <img src="{{ URL::asset('/public/img/female_icon.png') }}" width="100px" height="100px" alt="Aothun.vn">
            </div>
            <div class="item-info col-lg-9">
                <div>
                    <label>Nguyễn Văn A</label>
                    <span>nhận xét: </span>
                </div>
                <div>
                    <span>Ngày 17 tháng 12 năm 2016, 09:30</span>
                </div>
                <div>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed lectus id eros pharetra euismod sit amet ut ipsum.</span>
                </div>
            </div>
        </div>
    </div>

</div>

@stop