<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset("CSS/main.css") }}>
    <title>Custom Authentication</title>
     <!-- CSS only -->
     <style>

        center{
            padding: 10px;
            margin: 93px;
           
        }
        
        .control{
            width: 540px;
            height: 50px;
            background: transparent;
            border-radius: 10px;
            outline: none;
            padding: 0 10px;
            font-size: 20px;
            margin: 25px;
        }

        .group{
            width: 100%;
            height: 100%;
            position: relative;
        }

        input:focus+label,
        input:valid+label{
            font-size: 15px;
            top: 2px;
            background: white;
            padding: 5px;
        }

    .pass{
        border-radius: 8px;
        height: 20px;
        margin-left: 470px;
        margin-top: -120px;
        cursor: pointer;
        vertical-align: middle;
}

        .grand{
            background-color: #fff;
            width: 700px;
            height: 700px;
            border-radius: 10px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            
        }

        h1{
            color: white;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 900;
            font-size: 48px;
            line-height: 59px;
            text-align: center;
            background-color: blueviolet;
            border-radius: 10px 10px 0px 0px;
            height: 100px;
            margin-top: 10px;
        }

        
         .lien{
            color: black;
                font-size: 20px;
            }

                    
        .btn{
            background-color: blueviolet;
            font-size: 28px;
            width: 317px;
            height: 60px;
            color: white;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .btn:hover{
            filter: brightness(1.1);
        }

        .bb{
            margin-top: -610px;
        }

        .alert{
            background: blueviolet;
            border-radius: 5px;
            color: white;
            padding: 10px;
           text-align: center;
           margin-top: 20px;
           font-size: 28px;
           width: 540px;
            height: 50px;
            border-radius: 10px;
            outline: none;
}

     </style>
</head>
<body> 
    <main>
        <header class="header">
            <h2>MyShop</h2>
            <nav class="nav">
                <ul>
                    <li style="margin-right: 100px" class="li1"><a href="index"><img src={{ asset("images/logouser.png") }} alt="" height="50"></a></li>
                </ul>
            </nav>
        </header> 

        @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif

                @if(Session::has('fail'))
                <div class="alert" role="alert">
                    {{Session::get('fail')}}
                </div>
                @endif

                <center>
                        <form action="{{url('update-product')}}" method="post" class="grand">
                            <h1 class="popo">Update Product</h1>
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <div class="group">
                                <input type="text" class="control"  name="name" value="{{$data->name}}" required>
                            </div>
                            @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        <br>
                            <div class="bb">
                                <div class="group">
                                    <input type="text" class="control"  name="quantity" value="{{($data->quantity)}}" required>
                                </div>
                                @error('quantity')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <br>
                                <div class="group">
                                    <input type="text" class="control"  name="price" value="{{$data->price}}" required>
                                </div>
                                @error('price')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <br>
                            <div class="group">
                                <input type="text" class="control"  name="Statut" value="{{$data->Statut}}" required>
                            </div>
                            @error('Statut')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="group">
                                <button class="btn" type="submit">Submit</button>
                            </div>
                            <br>
                                <a class="lien" href="registration">New User!! Register Here</a>
                            </div>
                        </form>
                </center>

        
        </div>       
        </div>
        <footer>
            <p class="p">&copy;2022 MyShop UI Kit.All rights reserved</p>
            <nav class="nav">
                <ul>
                    <a href=""><img class="img1" src={{ asset("images/path4.png") }} alt="" height="17"></a>
                    <a href=""><img class="img1" src={{ asset("images/path1.png") }} alt="" height="17"></a>
                    <a href=""><img class="img1" src={{ asset("images/path3.png") }} alt="" height="17"></a>
                    <a href=""><img class="img"src={{ asset("images/path2.png") }} alt="" height="17"></a>
                </ul>
            </nav>
        </footer>
    </main>
    
</body>
</html>