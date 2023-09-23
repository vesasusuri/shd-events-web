<!DOCTYPE html>
<html lang="en">
  <head>
  @include("user.links")

  </head>
  <body>
    <div class="container-scroller">
      @include("user.sidebar")
      @include("user.navbar")

      <form action="{{ url('uploadTransaction')}}" method="POST" enctype="multipart/form-data" style="margin-top:120px;margin-left:50px">
        @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
                @endforeach
            </div>  
            @endif 
            
            @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif  
           
            <div class="mb-3">
              <label>Amount:</label>
              <input type="text" name="amount" class="form-control" style="color:white" required>
            </div>

            <div class="mb-3">
            <label>Cryptocurrency:</label>
              <br>
              <select name="curreny" required="" style="width:150px; height:40px;background-color:lightgray; border:none;border-radius:10px">
                <option style="text-align:center">-- Select --</option>
                <option style="text-align:center" value="bitcoin">Bitcoin</option>
                <option style="text-align:center" value="etherium">Etherium</option>
                <option  style="text-align:center"value="tether">Tether</option>
              </select>
            </div>

            <div class="mb-3">
              <label>Bank:</label>
              <input type="text" name="bank" class="form-control" style="color:white" required>
            </div>

            <div class="mb-3">
              <label>Reciver Hash Code:</label>
              <input type="text" name="reciver_id" class="form-control" style="color:white" required>
            </div>

            <div class="col-md-6">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
    @include("user.scripts")

  </body>
</html>