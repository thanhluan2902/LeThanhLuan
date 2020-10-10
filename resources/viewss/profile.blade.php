<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>My Profile</title>
    <style>
        .main {
            text-align: center;
        }

        .top {
            height: 100px;
            background: green;
            color: white;
            line-height: 100px;
            font-size: 50px;
            font-weight: 700;
        }

        .bot {
            height: 70px;
            background: green;
            color: white;
            line-height: 70px;
            font-size: 20px;
            font-weight: 700;
        }

        .lol {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        img {
            width: 100%;
            height: 500px;
        }
        .oke {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container main">
        <div class="row">
          <div class="col-md-12 top">
            My Profile
          </div>
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
          <div class="col-md-12 bot">
            copy by me
          </div>
        </div>
      </div>    
</body>
</html>