<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.masterhome')

@if ($page=='page1')
@section('main')
<x-home.a/>
<x-home.category/>
<x-home.scrollingcarte :ads="$var6" :titre="'plus récent'" />
@foreach ($data as $d)
    <x-home.scrollingcarte :ads="$d" :titre="$d->first()->categorie" />
@endforeach

<x-home.b/>

@endsection
@endif

@if ($page=='page2')
@section('main')
<x-home.filtre/>
<x-home.pagecarte :ads="$c" />
@endsection
@endif

@if ($page=='page3')
@section('main')
<x-home.detailscarte :ads="$details" :ads1="$ads" />
@endsection    
@endif

@if ($page=='page4')
@section('main')
<x-home.auth />
@endsection    
@endif
</body>
</html>