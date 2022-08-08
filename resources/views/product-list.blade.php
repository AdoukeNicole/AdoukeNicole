<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div></div>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Product List</h2>
                <div style="float:right">
                    <a class="btn btn-primary" href="{{url('add-product')}}">Add Product</a>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product name</th>
                            <th>Product quantity</th>
                            <th>Unit price</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->price}}</td>
                                <th>{{$item->Statut}}</th>
                                <td>
                                    @method('DELETE')
                                    <a class="btn btn-danger" href="{{url('edit-product/'.$item->id)}}">Edit</a>
                                    <a class="btn btn-primary" href="{{url('delete-product/'.$item->id)}}">Delete</a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>