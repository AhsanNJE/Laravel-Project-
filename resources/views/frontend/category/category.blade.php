@include("frontend.product.header")

@include("frontend.product.navber")

    <div class="container">
    <div class="row mt-3">
        <div class="col-md-4 border border-info rounded">
            <h2>Add Category Form</h2>
            <hr/>
                <div class="form-group pt-2">
                    <label for="category">Category Name</label>
                    <input type="text" class="name form-control" id="category">
                </div>
                <div class="form-group pt-2">
                    <label for="des">Description</label>
                    <input type="text" class="des form-control" id="des">
                </div>
                <div class="form-group pt-2">
                    <label for="status">Category Status</label>
                    <select class="status form-control" id="status">
                        <option value="0">------Select Status-------</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <button class="save btn btn-info form-control mt-2">Add Category</button>
                <button style="display:none" class="update btn btn-info form-control mt-2">Update Category</button>

        </div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody class="tdata">

                </tbody>
            </table>
        </div>
    </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Messege</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        Aru You Sure Delete This Category?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger mdelete">Confirm</button>
      </div>
    </div>
  </div>
</div>

@include("frontend.product.script")