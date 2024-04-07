@extends('main')
@section('title', 'Главная')

<style>
  @section('style')
    .card{
    background: #f6f7f8;
    /*border: rgba(188, 188, 255, 0.52) solid;*/
    border-radius: 30px;
    height: 200px;
    margin-left: 30px;
    margin-top: 25px;
  }
  @endsection
</style>

@section('content')
  <div class="conteiner-fluid">
    <div class="row" style="width: 99%; margin-left: 5px;margin-top: 15px">


      @php
        $img = scandir('image');
        for($i = 0; $i < count($img); $i++) {
          $img_s = explode('.', $img[$i]);
          $image_x[$i] = $img_s[0];
          $image_s[$i] = $img_s[1];
        }
//        var_dump($image);
      @endphp
{{--      <div class="col-sm-2 card"><img src="{{'image'.'/'.$image[2]}}"></div>--}}
      @for($i=0;$i<count($img);$i++)
        @if($image_s[$i] == 'png' || $image_s[$i] == 'jpg' || $image_s[$i] == 'jpeg')
          <div class="col-sm-2 card"><img src="{{'image'.'/'.$img[$i]}}"><strong class="text-center">{{$image_x[$i]}}</strong></div>
        @endif
      @endfor
{{--      <div class="col-sm-2 card"></div>--}}
{{--      <div class="col-sm-2 card"></div>--}}
{{--      <div class="col-sm-2 card"></div>--}}
{{--      <div class="col-sm-2 card"></div>--}}
    </div>
  </div>
@endsection
