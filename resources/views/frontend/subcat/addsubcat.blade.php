@include("frontend.product.header")
@include("frontend.product.navber")


<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <form action="{{ Route('addsubcat') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="form-group pt-4">
                <label for="">Select Category</label>
                <select name="cat_id" class="form-control">
                    @foreach($cats as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Subcat Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Subcat Description</label>
                <input type="text" name="des" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Subcat Image</label>
                <input type="file" name="pic" class="form-control">
            </div>
            <div class="form-group">
                    <label for="status">Subcat Status</label>
                    <select name="status" class="form-control">
                        <option value="0">------Select Status-------</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <button class="form-control btn btn-info mt-2">Add SubCat</button>
            </form>
        </div>
    </div>
</div>

@include("frontend.product.script")