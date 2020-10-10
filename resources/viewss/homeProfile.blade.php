@extends('layouts2.master')
@section('body')
<div class="col-md-12">
    <div class="row">
        <div class="col-5 lol"><img src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/44939847_245066712831336_6320991175834599424_n.jpg?_nc_cat=101&_nc_sid=174925&_nc_ohc=utNmIOoa74sAX-zoCCY&_nc_ht=scontent.fhan2-1.fna&oh=4cad29bf5510722bb34edc9b149856b0&oe=5FA7F8E5" alt=""></div>
        <div class="col-1 lol"> </div>
        <div class="col-6 lol oke"> 
            <p style="padding-top: 50px;"><b>Họ và tên : </b></b>{{ $name }}</p>
            <p><b>Năm sinh  : </b>{{ $birthday }}</p>
            <p><b>Trường học  : </b></b>{{ $school }}</p>
            <p><b>Quê quán : </b></b>{{ $address }}</p>
            <p><b>Giới thiệu bản thân : </b></b>
                {{-- {{ $name }} --}}
                @foreach ($info as $i)
                    {{  $i }}
                @endforeach
            </p>
            <p><b>Mục tiêu nghề nghiệp : </b></b>{{ $mtnn }}</p>
            <p><b>Vị trí ứng tuyển : </b></b>{{ $vtri }}</p>
            <p><b>Số năm kinh nghiệm : </b></b>{{ $soKN }}</p>
        </div>
    </div>
</div>
@endsection



