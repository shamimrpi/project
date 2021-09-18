@extends('layouts.admin')
@section('title', 'DataTable')
@section('main-content')
<main>
  <div class='notifications top-right'></div>
    <div class="container-fluid">
        <div class="heading-title p-2 my-2">
            <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Category Edit</span>
        </div>
        <div class="card my-3">
            <div class="card-header d-flex justify-content-between">
                <div class="table-head"><i class="fas fa-user me-1"></i>Category</div>
                
            </div>
            <div class="card-body table-card-body">
              
                  <div class="row justify-content-center">
                    <div class="col-sm-8 card-body table-card-body">
                      <form action="{{route('category.update',$category->id)}}" class="edit-form" method="post" enctype="multipart/form-data">
                       @csrf
                      <div class="row justify-content-center">
                        <div class="col-sm-11">
                          <label>Category Name</label>
                          <input type="text" value="{{$category->name}}" name="name" class="form-control">
                        </div>
                        <div class="col-sm-8">
                          <label>Image</label>
                          <input type="file" id="imgload" name="image" class="form-control" accept="image/*" onchange="loadFile(event)">
                        </div>
                      
                        <div class="col-sm-3">
                          <div class="category-img">
                            <img  id="showImage" style="height: 130px;width:250px;margin-top:5px">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3">
                             <button type="submit" class="btn btn-primary update-btn">Submit</button>
                          </div>
                         
                        </div>
                      </div>
                     
                    </form>
                    </div>
                  
                    
                </div>
              </form>
                
            </div>


        </div>  
    </div>
</main>
@endsection
@section('scripts')
<script type="text/javascript">
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('showImage');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };



</script>
@endsection