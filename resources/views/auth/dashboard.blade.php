    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Custom Authentication</title>
        <!-- CSS only -->
        <style>
            
        center{
            background-color: #fff;
            height: 400px;
            margin-left: 600px;
            margin-right: 600px;
            border-radius: 10px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
     </style>

        </head>
        <body>
                <center style="margin-top: 200px;">
                    <h2 style="font-size: 30px;">Welcome to your dashboard!!</h2>
                <table border="1" style="font-size: 20px;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surame</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$show->name}}</td>
                            <td>{{$show->surname}}</td>
                            <td>{{$show->email}}</td>
                        </tr>
                    </tbody>
                </table>
                <div style="margin-top:50px">
                    <a class="a1" style="text-decoration: none;font-size:20px;color:white;background:#8c30f5;padding:10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"  href="{{url('product-list')}}">View All Product</a><br><br><br>
                    <a class="a2" style="text-decoration: none;font-size:20px;color:white; background:royalblue;padding:10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"  href="{{url('log')}}">Add New Product</a><br><br><br>
                    <a class="a2" style="text-decoration: none;font-size:20px;color:white; background:royalblue;padding:10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"  href="{{url('log')}}">LogOut</a><br><br>
                 </div>
                </center>
        </body>
        </html>