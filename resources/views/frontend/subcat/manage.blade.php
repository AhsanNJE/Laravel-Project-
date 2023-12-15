@include("frontend.product.header")
@include("frontend.product.navber")

    <div class="row">
        <div class="col-md-6 offset-md-3 mt-3">
            <div class="form-group">
            <a href="{{ Route('subcat') }}" class="btn btn-info">Add Subcat</a>
            </div>
      

        <table class="table">
        <tr>
            <th>SL</th>
            <th>Category Id</th>
            <th>Category Name</th>
            <th>Subcat Name</th>
            <th>Subcat des</th>
            <th>Subcat image</th>
            <th>Subcat status</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $sl=1; ?>

        @foreach ($subcats as $subcat)
        <tr>
            <td>{{ $sl }}</td>
            <td>{{ $subcat->cat_id }}</td>
            <td>{{ $subcat->catName->name }}</td>
            <td>{{ $subcat->name }}</td>
            <td>{{ $subcat->des }}</td>
            <td><img height="50" src="{{ asset('frontend/subcatImage/'.$subcat->image) }}" alt=""></td>
            <td>{{ $subcat->status }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ Route('editsubcat',$subcat->id) }}">Edit</a>
            </td>
            <td>    
                <a class="btn btn-danger btn-sm" href="{{ Route('deletesubcat',$subcat->id) }}">Delete</a>
            </td>
        </tr>
            <?php $sl++; ?>
        @endforeach
    </table>
        </div>
    </div>

@include("frontend.product.script")