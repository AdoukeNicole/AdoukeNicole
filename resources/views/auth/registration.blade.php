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
            height: 1100px;
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
            margin-top: -980px;
        }
       
        
        .alert{
            background: blueviolet;
            border-radius: 5px;
            color: #ffffff;
            width: 650px;
            height: 50px;
            padding: 10px;
           text-align: center;
           margin-left: 600px;
           margin-top: 20px;
           font-size: 28px;
           border-radius: 10px;
            outline: none;
           
}

.alert1{
            background: blueviolet;
            border-radius: 5px;
            color: white;
            width: 540px;
            height: 50px;
            padding: 10px;
           text-align: center;
           margin-top: 20px;
           font-size: 28px;
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
                    <li class="li1"><a href="login">Login</a></li>
                    <li class="li2"><a href="registration">Sigin</a></li>
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
                        <form action="{{url('register-user')}}" method="post" class="grand">
                            <h1 class="popo">Registration</h1>
                            
                            @csrf
                            <div class="group">
                                <input type="text" class="control"  name="name" value="{{old('name')}}" required>
                                <label for="">Name</label>  
                            </div>
                            @error('name')
                        <div class="alert" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        <br>
                            <div class="bb">
                                <div class="group">
                                    <input type="text" class="control"  name="surname" value="{{old('surname')}}" required>
                                    <label for="">Surname</label>  
                                </div>
                                @error('suename')
                            <div class="alert1" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <br>
                                <div class="group">
                                    <input type="text" class="control"  name="email" value="{{old('email')}}" required>
                                    <label for="">Email</label>  
                                </div>
                                @error('email')
                            <div class="alert1" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <br>
                            <div class="group">
                                <input type="text" class="control"  name="phone" value="{{old('phone')}}" required>
                                <label for="">Phone</label>  
                            </div>
                            @error('phone')
                            <div class="alert1" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <br>
                            <div class="group">
                                <input id="pass" type="text" class="control" placeholder="Enter password" name="password" value="{{old('password')}}" required>
                                <img id="eye"  class="pass" src="images/non-bar.png" onclick="changer()"  height="15" width="20.90" alt=""> 
                            </div>
                            @error('password')
                            <div class="alert1" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <br>
                            <div class="group">
                                <input id="pass" type="text" class="control"  name="address" value="{{old('address')}}" required>
                                <label for="">Address</label> 
                            </div>
                            @error('address')
                            <div class="alert1" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="group">
                                <button class="btn" type="submit">Submit</button><br><br>
                                <a class="lien" href="login">Already Registered!! Login Here</a>
                            </div>
                        </form>
                </center>

        
        </div>       
        </div>
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
    
    <script>
        e=true;
        function changer(){
            if(e){
                document.getElementById("pass").setAttribute("type","text");
                document.getElementById("eye").src="images/non-bar.png";
                e=false;
            }else{
                document.getElementById("pass").setAttribute("type","password");
                document.getElementById("eye").src="images/bar.jpg";
                e=true;
            }
                
      }
    </script>
</body>
</html>