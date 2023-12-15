@include("frontend.product.header")
@include("frontend.product.navber")

    <div class="row">
        <div class="col-md-6 offset-md-3 mt-3">
            <div class="form-group">
            <a href="{{ Route('addproduct') }}" class="btn btn-info">AddProduct</a>
            </div>
      

        <table class="table">
        <tr>
            <th>SL NO</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Barcode</th>
            <th>Product Status</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $sl=1; ?>

        @foreach ($data as $alldata)
        <tr>
            <td>{{ $sl }}</td>
            <td>{{ $alldata->pname }}</td>
            <td>{{ $alldata->pdes }}</td>
            <td>{{ $alldata->barcode }}</td>
            <td>
            @if($alldata->status==1)
                <a href="{{ Route('status',$alldata->id) }}" class="btn btn-success"><i class="fa-solid fa-check"></i></a>
            @else
                 <a href="{{ Route('status',$alldata->id) }}" class="btn btn-danger"><i class="fa-solid fa-check"></i></a>
            @endif
            </td>
            <td>
                <a href="{{ Route('editproduct',$alldata->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                <a href="{{ Route('editproduct',$alldata->id) }}" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$alldata->id}}"><i class="fas fa-trash"></i></a>
                <!-- <a href=""><button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$alldata->id}}"><i class="fas fa-trash"></i></button></a> -->
            </td>
           
        </tr>
        <?php $sl++ ?>
        <!-- Modal -->
<div class="modal fade" id="deleteModal{{$alldata->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation Messege</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Are you sure want to delete this?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="{{ Route('delete',$alldata->id) }}" type="button" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

        @endforeach
    </table>
        </div>
    </div>

@include("frontend.product.script")