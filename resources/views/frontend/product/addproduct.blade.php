@include("frontend.product.header")

@include("frontend.product.navber")

    <div class="row mt-3">
        <div class="col-md-6 offset-md-3">
            <form action="{{ Route('productstore') }}" method="post">
                @csrf
                <div class="form-group mt-3 pt-3">
                    <label for="pname">Product Name</label>
                    <input type="text" name="pname" class="form-control mt-2" id="pname">
                </div>
                <div class="form-group">
                    <label for="pdes">Product Description</label>
                    <input type="text" name="pdes" class="form-control mt-2" id="pdes">
                </div>
                <div class="form-group">
                    <label for="barcode">Product Barcode</label>
                    <input type="text" name="barcode" class="form-control mt-2" id="barcode">
                </div>
                <div class="form-group">
                    <label for="status">Product Status</label>
                    <select name="status" class="form-control mt-2" id="status">
                        <option value="0">------Select Status-------</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <button class="btn btn-success form-control mt-2">Add Product</button>
            </form>
        </div>
    </div>

@include("frontend.product.script")