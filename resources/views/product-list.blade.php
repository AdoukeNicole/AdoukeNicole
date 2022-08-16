<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add product</title>
      <!-- CSS only -->

      <style>

        center{
            padding-left: 1px;
            background: white;
            
            
        }
                table{
                text-indent: 100px;
                border-radius: 10px;
                 box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                border-radius: 10px;
                margin-top: 1px;
                margin-bottom: 150px;
            }

            .lili {
                
                margin-left: 1555px;
            }
                .danger{
                    position: absolute;
                    width: 100px;
                    height: 40px;
                    left: 398px;
                    top: -10px;
                    background: #3dab85;
                    border-radius: 12px;

            }

                .danger1{
                    text-decoration: none;
                    color: white;
                    margin: 20px;
                    background: #ed1a1a;
                    border-radius: 5px;
                    font-size: 20px;
                    
            }

                footer{
                        
                        display: flex;
                        justify-content: space-between;
                        background-color: black;
                        padding: 10px;
                        color: white;
                        margin-top: 410px;
                    
                    }

                    body{
                margin: 0px;
            }
                header{
                    
                    display: flex;
                    justify-content: space-between;
                    background-color: rgb(217, 217, 217);
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                    
                }

                h2{
                    margin-left: 100px;
                }


                .img{
                    margin-right: 100px;
                    border-radius: 15px;
                }

                .img1{
                    margin-right: 10px;
                    border-radius: 15px;
                }


                .p{
                    margin-left: 100px;
                    margin-top: 25px;
                }

            </style>
            </head>
            <body>
                <main>
                    <header>
                        <h2 style="margin-top:35px">MyShop</h2>
                        <nav class="nav">
                            <ul>
                                <li style="margin-right: 100px" class=""><a href="{{url('log')}}"><img src={{ asset("images/logouser.png") }} alt="" height="50"></a></li>
                            </ul>
                        </nav>
                    </header>
                    <br>
                    <br>
                    <center>
                        <div>
                        
                            <table>
                                <thead>
                                    <tr style="font-size: 22px;">
                                        <th>#</th>
                                        <th>Product name</th>
                                        <th>Product quantity</th>
                                        <th>Unit price</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <br>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr >
    
                                            <td style="text-align: center;font-size: 18px;">{{$i}}</td>
                                            <td style="text-align: center;font-size: 18px;">{{$item->name}}</td>
                                            <td style="text-align: center;font-size: 18px;">{{$item->quantity}}</td>
                                            <td style="text-align: center;font-size: 18px;">{{$item->price}}</td>
                                            <td style="text-align: center;font-size: 18px;">{{$item->Statut}}</td>
                                            <td class="td">
                                                    <button style="height: 35px; width:80px; border-radius:7px;border:none;background:#3dab85;margin-right:20px" >
                                                        <a style="font-size: 20px;color:white;text-decoration:none; "  href="{{url('edit-product/'.$item->id)}}">Edit</a>
                                                    </button>
                                                <button  style="height: 35px; width:80px; border-radius:7px;border:none; background: red;margin-right:30px">
                                                    <a style="font-size: 20px;color:white;text-decoration:none; "  href="{{url('delete-product/'.$item->id)}}">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
    
                            </table>
                        </div>
                    </div>
                </div>
                    </center>
                    
            <div style="margin-top:-120px;">
                <a class="lili" href="{{url('add-product')}}"><img src={{ asset("images/adding.png") }} alt="" height="50"></a>
            </div>
                <footer >
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