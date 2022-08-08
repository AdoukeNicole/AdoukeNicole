<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit product</title>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 20px">
                <h2>Add Product</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{url('update-product')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="md-3">
                        <label class="form-lebel">Product Name</label>
                        <input type="hidden">
                        <input type="text" placeholder="Enter name" name="name" class="form-control"  value="{{$data->name}}">
                    </div>
                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="md-3">
                        <label class="form-lebel">Quantity Product</label>
                        <input type="text" placeholder="Enter quantity" name="quantity" class="form-control" value="{{($data->quantity)}}">
                    </div>
                    @error('quantity')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="md-3">
                        <label class="form-lebel">Unit Price</label>
                        <input type="text" placeholder="Enter unit price" name="price" class="form-control" value="{{$data->price}}">
                    </div>
                    @error('price')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="md-3">
                        <label class="form-lebel">Quantity Product</label>
                        <input type="text" placeholder="Enter statut" name="Statut" class="form-control" value="{{$data->Statut}}">
                    </div>
                    @error('Statut')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{url('product-list')}}">Back</a>
                    <a class="btn btn-danger" href="{{url('product-list')}}">Show All Product</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>