
@include("frontend.product.header")
@include("frontend.product.navber")

    <div class="row mt-3" >
        <div class="col-md-6 offset-md-3">
            <form action="{{ Route('update',$products->id) }}" method="post">
                @csrf
                <div class="form-group mt-3 pt-3">
                    <label for="pname">Product Name</label>
                    <input type="text" value="{{ $products->pname }}" name="pname" class="form-control mt-2" id="pname">
                </div>
                <div class="form-group">
                    <label for="pdes">Product Description</label>
                    <input type="text" value="{{ $products->pdes }}" name="pdes" class="form-control mt-2" id="pdes">
                </div>
                <div class="form-group">
                    <label for="barcode">Barcode</label>
                    <input type="text" value="{{ $products->pdes }}" name="barcode" class="form-control mt-2" id="barcode">
                </div>
                <div class="form-group">
                    <label for="status">Product Status</label>
                    <select class="form-control mt-2" name="status" id="status">
                        <option value="0">------Select Status-------</option>
                        <option value="1" @if($products->status==1)selected @endif>Active</option>
                        <option value="2" @if($products->status==2)selected @endif>Inactive</option>
                    </select>
                </div>
                <button class="btn btn-success form-control mt-3">Update</button>
            </form>
        </div>
    </div>

@include("frontend.product.script")