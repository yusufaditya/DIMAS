@php
    session_start();
@endphp
@extends('layouts.dashboard')

@section('title', 'DIMAS - Dashboard')

@section('plugin')
<script src="{{asset('/assets/chart.js/dist/Chart.min.js')}}"></script>
@endsection

@section('content')

<div class="row p-4 border-bottom">
    {{-- Profile Icon --}}
    <div class="col-auto m-auto"><i class="fa fa-user-circle fa-3x text-black-50" aria-hidden="true"></i></div>
    {{-- Welcome & Plan --}}
    <div class="col">
        <div class="row">
            <h5>Welcome, {{ Auth::user()->name }}!</h5>
        </div>
        <div class="row">
            <h5 class="text-muted">{{ (!empty($paket) && (@$paket->status == 'active' || @$paket->status_pembayaran = 'pending' || @$paket->status_pembayaran == ''))? "#" . $paket->paket : "No plan yet!" }}</h5>
        </div>
    </div>
    {{-- Buy / Recharge Plan --}}
    @if (empty($paket) || (@$paket->status_pembayaran == '' && @$paket->status == 'inactive'))
    <a class="col m-auto text-right" href="{{route('/plan')}}"><button class="btn-primary rounded p-2 pr-3 pl-3">Buy a Plan</button></a>
    @endif
    
</div>

<div class="row p-4">
    {{-- Left Section : Activity & Package Info --}}
    <div class="col-md mr-3">
        {{-- Account Activity --}}
        <div class="row">
            <div class="col mb-3 card">
                <h5 class="card-title mt-3 pl-2 pb-2 border-bottom">Account Activity</h5>
                <canvas class="col" id="accountActivity" width="300" height="100"></canvas>
                <script>
                    var ctx = document.getElementById('accountActivity').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu',
                                'Minggu'
                            ],
                            datasets: [{
                                label: 'Followers',
                                data: [12, 19, 3, 5, 2, 3, 8],
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1,
                                fill: false
                            }, {
                                label: 'Interaction',
                                data: [14, 16, 5, 13, 22, 6, 2],
                                backgroundColor: 'rgba(92, 128, 170, 0.4)',
                                borderColor: 'rgba(92, 128, 170, 1)',
                                borderWidth: 1,
                                fill: false
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
            </div>
        </div>

        {{-- Package Information --}}
        @if (!empty($paket))
        <div class="row">
            <div class="col card mb-3">
                <h5 class="card-title mt-3 pl-2 pb-2 border-bottom">Package Information</h5>
                <div class="card-text">
                    <h4>{{ $paket->nama }}</h4>
                    <p>{{ $paket->deskripsi }}</p>
                </div>
            </div>
        </div>
        @endif
    </div>

    {{-- Right Section : Last Log --}}
    <div class="col-md mr-3 card">
        <h5 class="card-title mt-3 pl-2 pb-2 border-bottom">Last Log in DMS</h5>
        <div class="card-text"> {{ !empty($_SESSION['last_login']) ? date('d F Y', strtotime($_SESSION['last_login'])). " " . date('H:i:s',strtotime($_SESSION['last_login'])) : date('d F Y', strtotime(Auth::user()->last_login)). " " .date('H:i:s',strtotime(Auth::user()->last_login)) }} </div>
    </div>
</div>
@endsection

@section('home', 'active')
@section('schedule', '')
