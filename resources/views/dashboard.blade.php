@extends('layouts.admin',['title'=>'Dashboard'] )

@section('content-header')
<h1 class="m-0">Dashboard</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-6 col-lg-3">
        <x-small-box label="Permintaan" :value="$pemesanan->jumlah_permintaan" 
        icon="fas fa-cash-register" 
        background="bg-warning" 
        :link="route('pemesanan.index')"/>    
    </div>

    <div class="col-6 col-lg-3">
        <x-small-box label="Check In" :value="$pemesanan->jumlah_checkin" 
        icon="fas fa-door-closed" 
        background="bg-indigo" 
        :link="route('pemesanan.index')" />    
    </div>

    <div class="col-6 col-lg-3">
        <x-small-box label="Kamar" :value="$kamar->jumlah_kamar" 
        icon="fas fa-bed" 
        background="bg-success" 
        :link="route('kamar.index')" />    
    </div>

    <div class="col-6 col-lg-3">
        <x-small-box label="Fasilitas Hotel" :value="$fasilitas->jumlah_fasilitas" 
        icon="fas fa-swimming-pool" 
        background="bg-maroon" 
        :link="route('fasilitas.index')" />    
    </div>

    @can('role','admin')
    <div class="col-6 col-lg-3">
        <x-small-box label="User Admin" :value="$admin->jumlah_admin" 
        icon="fas fa-users" 
        background="bg-lime" 
        :link="route('admin.index')" />    
    </div>
    @endcan
</div>

@include('dashboard.chart',['data_chart'=>$data_chart])

@endsection