@extends('layouts.admin')
@section('title', 'DataTable')
@section('main-content')
<main>
  <div class='notifications top-right'></div>
    <div class="container-fluid">
        <div class="heading-title p-2 my-2">
            <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Product create </span>
        </div>
        <div class="card my-3">
            <div class="card-header d-flex justify-content-between">
                <div class="table-head"><i class="fas fa-user me-1"></i>Product create</div>
                
            </div>
            <div class="card-body table-card-body">
              <form action="" enctype="multipart/form-data">
                  <div class="row">
                        <div class="col-sm-6">
                            <label>Product Name</label>
                            <input type="text"  name="name" class="form-control" placeholder="Product Name">
                        </div>
                        <div class="col-sm-6">
                            <label>Category</label>
                            <select class="form-control select" name="category_id">
                                <option>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">S{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Sub Category</label>
                            <select class="form-control select" name="sub_category_id">
                                <option>Select Sub Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">S{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Price</label>
                            <input type="number" id="price"  name="price" class="form-control" placeholder="Product Price">
                        </div>
                        <div class="col-sm-4">
                            <label>Discount</label>
                            <input type="number" id="discount"  name="discount" class="form-control"  placeholder="Discount">
                        </div>
                        <div class="col-sm-2">
                            <label>Discount Price</label>
                            <input type="text"  name="discount_price" id="discount_price" class="form-control" disabled>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field">
                                <label class="active">Main Image</label>
                                <input type="file" class="form-control" name="m_image">
                            </div>
                            <img id="showImage">
                        </div>
                        <div class="col-sm-6">
                            <label>Description</label>
                            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                        </div>
                       
                        <div class="col-sm-6">
                            <label>Size Description</label>
                            <textarea class="form-control" id="s_description" name="size_description" cols="10"></textarea>
                        </div>
                       
                        <div class="col-md-6 mb-2">
                            <div class="input-field">
                                <label class="active">Others Iimage</label>
                                <div class="input-images-1" style="padding-top: .5rem;"></div>
                            </div>
                        </div>
                        
                       
                  </div>
                  
                  <div class="row">
                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-info" value="Create"> 
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

// multiple image show
    




    // add remove section 
  $(document).on("click",".addeventmore",function(){
          var whole_extra_item_add = $("#whole_extra_item_add").html();
          $(this).closest(".add-image").append(whole_extra_item_add);
            counter++;
        });
         $(document).on("click",".removeeventmore",function(event){
          
          $(this).closest("#delete_whole_extra_item_add").remove();
            counter-=1;
        });

</script>
<script>
    $(document).ready(function() {
    $('#s_description').summernote({
        placeholder: 'Writer here Product Description',
        tabsize: 2,
        height: 150
    });
    

    $('#description').summernote({
        placeholder: 'Write here size description',
        tabsize: 2,
        height: 150
    });
    $('.input-images-1').imageUploader();

});
</script>
<script>
    function discount() {
            let price = document.getElementById("price").value;
            var discount = document.getElementById("discount").value;
            var discountPrice = parseFloat(price * discount) / 100;
            if (price == '') {
                alert('Please Enter Product Price First');
                document.getElementById("discount").value = 0;
                return; 
            }
            if(discount == '' || discount == 0) {
                document.getElementById("discount_price").value = 0;
                return;
            }
            document.getElementById("discount_price").value = discountPrice.toFixed(2);
        }
       
        
</script>
    
@endsection

