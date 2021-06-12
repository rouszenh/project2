@extends('layout.master')
@section('title', 'แสดงชื่อ')
@section('content')
<h1>แสดงชื่อ</h1>
ข้อมูลที่ป้อน
 ชื่อ {{$name}} นามสกุล {{$surname}} อายุ {{$age}}
@endsection
