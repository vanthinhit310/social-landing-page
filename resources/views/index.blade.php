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
                    <select class="select" style="width: 50%" name="city">
                        <option></option>
                        @foreach($cities as $row)
                            <option value="{{ @$row->matp }}"> {{ @$row->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4">
                    <select name="district" class="form-control">
                        <option></option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <select name="ward" class="form-control">
                        <option></option>
                    </select>
                </div>
            </div>
        </div>
    </section>
@stop
@push('script')
    <script>
        var get_district_url = '{{ route('app.ajax.district') }}';
        var get_ward_url = '{{ route('app.ajax.ward') }}';
    </script>
@endpush
