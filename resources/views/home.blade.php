
@extends('base')


@section('content')



<div class="container">
    <h1>

        This Is My Home
    </h1>

      <style>

        .buttonBox{
            width: 500px;
            text-align: center;
            background-color: rgb(0, 8, 31);
            display: grid;
            place-items: center;
            margin-top: 150px;
            height: 600px;

            box-shadow: 10px 10px 30px 1px rgba(0, 0, 0, 0.541);

        }
        .buttonBox a{
            background-color: rgb(35, 31, 48);
            width: 150px;
            margin: 20px;
            padding: 20px;
            color: white;
            text-decoration: none;
            transition: 0.1s;
        }
        .buttonBox a:hover{
            background-color: rgb(63, 58, 75);



        }

        .buttonBox a:active{
            background-color: rgb(63, 57, 82);

            font-size: 15px;
            padding: 21px;

        }

        .container{

            display: grid;
            place-items: center;
        }

      </style>

</div>

@stop


