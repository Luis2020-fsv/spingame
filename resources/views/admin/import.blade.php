@extends('admin/layouts/default')
    @section('custom_css')
        <style>
        
        </style>
    @stop

    @section('content')

    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                Import Export Excel to User Table - Awoofspin.com
            </div>
            <div class="card-body">
                @if($errors->any())
                    <h4 style="color: red!important">{{$errors->first()}}</h4>
                @endif
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <span>To import User data, First upload CSV file to import.</span><br>
                    <button class="btn btn-success">Import User Data</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                </form>
            </div>
        </div>
    </div>


    @stop