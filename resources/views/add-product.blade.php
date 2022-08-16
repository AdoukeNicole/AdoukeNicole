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
        form label{
            position: absolute;
            left: 100px;
            top: 40px;
            color: black;
            text-transform: capitalize;
            font-size: 18px;
            transition: top .3s
            padding: 0 5px;
            pointer-events: none;
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
            font-size: 30px;
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
                background: blueviolet;
                color: #fff;
                padding: 10px;
                border-radius: 5px;
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
            height: 30px;
            width: 670px;
            padding: 10px;
           text-align: center;
           margin-left: 600px;
           margin-top: 20px;
           font-size: 28px;
}
     </style>
</head>
<body> 
    <main>
        <header class="header">
            <h2>MyShop</h2>
            <nav class="nav">
                <ul>
                    <li style="margin-right: 100px" class=""><a href="{{url('index')}}"><img src={{ asset("images/logouser.png") }} alt="" height="50"></a></li>
                </ul>
            </nav>
        </header> 

        @if(Session::has('success'))
                <div class="alert" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif

                @if(Session::has('fail'))
                <div class="alert" role="alert">
                    {{Session::get('fail')}}
                </div>
                @endif

                <center>
                        <form action="{{url('save-product')}}" method="post" class="grand">
                            <h1 class="popo">Veuillez fournir les informations de votre produit</h1>
                            
                            @csrf
                            <div class="group">
                                <input type="text" class="control"  name="name" value="{{old('name')}}" required>
                                <label for="">ProductName</label>  
                            </div>
                            @error('name')
                        <div class="alert" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        <br>
                            <div class="bb">
                                <div class="group">
                                    <input type="text" class="control"  name="quantity" value="{{old('quantity')}}" required>
                                    <label for="">Quantity</label>  
                                </div>
                                @error('quantity')
                            <div class="alert " role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <br>
                                <div class="group">
                                    <input type="text" class="control"  name="price" value="{{old('price')}}" required>
                                    <label for="">Unit Price</label>  
                                </div>
                                @error('price')
                            <div class="alert " role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <br>
                            <div class="group">
                                <input type="text" class="control"  name="Statut" value="{{old('Statut')}}" required>
                                <label for="">Statut</label>  
                            </div>
                            @error('Statut')
                            <div class="alert" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="group">
                                <button class="btn" type="submit">Submit</button>
                                <br><br>
                                <a class="lien" href="product-list">Back</a>
                            </div>
                            
                            </div>
                        </form>
                </center>

        
        <footer>
            <p class="p">&copy;2022 MyShop UI Kit.All rights reserved</p>
            <nav class="nav">
                <ul>
                    <a href=""><img class="img1" src="images/path4.png" alt="" height="17"></a>
                    <a href=""><img class="img1" src="images/path1.png" alt="" height="17"></a>
                    <a href=""><img class="img1" src="images/path3.png" alt="" height="17"></a>
                    <a href=""><img class="img" src="images/path2.png" alt="" height="17"></a>
                </ul>
            </nav>
        </footer>
    </main>
    
</body>
</html>