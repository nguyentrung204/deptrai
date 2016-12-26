@extends('layouts.admin')
@section('content')
    <div class="container">
        <form id="editForm" method="post" action="#">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $config->name ?>" readonly>
            </div>
            <div class="form-group">
                <label for="itemContent">Content:</label>
                <textarea class="form-control" id="itemContent" name="itemContent" rows="5"><?php echo $config->content ?></textarea>
            </div>
            <div class="row text-center">
                <input type="submit" class="btn btn-primary" value="Lưu thay đổi" />
            </div>
        </form>
    </div>
@stop
