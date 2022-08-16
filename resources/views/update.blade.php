<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Edit product</title>
      <!-- CSS only -->
</head>
<body>
    
            <div class="col-md-12" style="margin-top: 20px">
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
                       
                        
                    </div>
                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="md-3">
                        <label class="form-lebel">Quantity Product</label>
                        <input type="hidden">
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
            
</body>
</html>