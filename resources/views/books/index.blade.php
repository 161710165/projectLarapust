@extends('layouts.app')
@section('content') 
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <nav aria-label="breadcrumb primary">
            <ol class="breadcrumb">
               <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a> </li>
            </ol>
         </nav>
         <div class="card">
            <div class="card-header">Data Buku</div>
            <br>
            <center>
               <p> 
                  <a class="btn btn-primary" href="{{ route('books.create') }}">Tambah </a>
                  <a class="btn btn-primary" href="{{ url('/admin/export/books') }}">Export</a>
               </p>
            </center>
            <div class="card-body">
               {!! $html->table(['class'=>'table table-striped']) !!}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('scripts') 
{!! $html->scripts() !!} 
@endsection