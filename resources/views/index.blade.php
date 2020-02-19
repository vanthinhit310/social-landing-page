@extends('layouts.master')
@push('style')
    <style>
        .content-wrapper {
            margin-top: 50px;
        }
    </style>
@endpush
@section('content')
    <section class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <select data-placeholder="Choose a country..." class="chosen-select" name="city" class="chosen-select">
                        @foreach($cities as $row)
                            <option value="{{ @$row->matp }}"> {{ @$row->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4">
                    <select name="city" class="form-control">
                        <option value=""> -- Select One --</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <select name="city" class="form-control">
                        <option value=""> -- Select One --</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
@stop
@push('script')

@endpush
