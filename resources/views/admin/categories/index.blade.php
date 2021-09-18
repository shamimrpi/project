@extends('layouts.admin')
@section('title', 'DataTable')
@section('main-content')
<main>
  <div class='notifications top-right'></div>
    <div class="container-fluid">
        <div class="heading-title p-2 my-2">
            <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Category List</span>
        </div>
        <div class="card my-3">
            <div class="card-header d-flex justify-content-between">
                <div class="table-head"><i class="fas fa-user me-1"></i>Category</div>
                
            </div>
            <div class="card-body table-card-body">
              
                  <div class="row">
                    <div class="col-sm-5 card-body table-card-body">
                      <form action="{{route('category.store')}}" class="edit-form" method="post" enctype="multipart/form-data">
                @csrf
                      <div class="row justify-content-center">
                        <div class="col-sm-11">
                          <label>Category Name</label>
                          <input type="text" name="name" class="form-control">
                          @if($errors->has('name'))
                          <span class="text-danger">{{$errors->first('name')}}</span>
                          @endif
                        </div>
                        <div class="col-sm-8">
                          <label>Image</label>
                          <input type="file" id="imgload" name="image" class="form-control" accept="image/*" onchange="loadFile(event)">
                          @if($errors->has('image'))
                          <span class="text-danger">{{$errors->first('image')}}</span>
                          @endif
                        </div>
                        <div class="col-sm-3">
                          <div class="category-img">
                            <img  id="showImage" style="height: 130px;width:105px;margin-top:5px">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                           <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                       
                      </div>
                    </form>
                    </div>
                    <div class="col-sm-7">
                       <div class="card-body table-card-body">
                        <table id="datatablesSimple">
                            <thead class="text-center bg-light">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($categories as $key=>$category)
                                <tr class="text-center">
                                    <td>{{$key+1}}</td>
                                    <td>{{$category->name}}</td>
                                    <td class="text-center"><img src="{{asset('admin/images/category/'. $category->image) }}" style="height: 40px;width:80px" ></td>
                                    <td><a class="active-btn" href="{{route('category.active',$category->id)}}">
                                      @php
                                          if($category->status == 'A'){@endphp
                                              Active
                                          @php  }
                                           else{  @endphp
                                            Deactive @php
                                           }
          
                                          @endphp
                                    
                                        </td>
                                    <td class="text-center">
                                      <form action="{{ route('category.delete',$category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('category.edit',$category->id) }}" class="btn btn-edit edit-btn" ><i class="fas fa-pencil-alt"></i></a>
                                        <button class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this category?');"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                      </div>
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