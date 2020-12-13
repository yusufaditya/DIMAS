@extends('layouts.dashboard')

@section('title', 'DIMAS - Dashboard')

@section('plugin')
<script src="{{asset('/assets/chart.js/dist/Chart.min.js')}}"></script>
@endsection

@section('content')

    <div class="row p-4 border-bottom">
        {{-- Profile Icon --}}
        <div class="col-1 m-auto"><i class="fa fa-user-circle fa-3x text-black-50" aria-hidden="true"></i></div>
        {{-- Welcome & Plan --}}
        <div class="col m-auto">
            <div class="row"><h5>Welcome, @user!</h5></div>
            <div class="row"><h5 class="text-muted">#nama paket</h5></div>
        </div>
        {{-- Buy / Recharge Plan --}}
        <div class="col-2 m-auto"><button class="btn-primary rounded p-2 pr-3 pl-3">Buy a Plan</button></div>
    </div>
@endsection

@section('home', 'active')
@section('schedule', '')
    