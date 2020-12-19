@extends('layouts.admin')

@section('title', 'DIMAS - User Index')
    
@section('mainContent')
<div class="row h-100">
    <div class="col-1">{{--OFFSET--}}</div>
    <div class="col">

        <table class="table table-striped table-light table-hover rounded mt-5">
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Email</td>
                <td>Package</td>
                <td>Option</td>
            </tr>
            {{-- Data --}}
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>johndoe@gmail.com</td>
                <td>Web Gold</td>
                <td><a href="{{route('/admin/schedule/id')}}" class="btn btn-success"><i class="fa fa-wrench" aria-hidden="true"></i></a></td>
            </tr>
        </table>
    </div>
    <div class="col-1">{{--OFFSET--}}</div>
</div>
@endsection