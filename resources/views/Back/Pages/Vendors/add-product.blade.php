@extends($appType.'.Layouts.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Add Product</h4>
                        </div>
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" class="form-control border-input"
                                                   placeholder="Product Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="food-category">Product Categories</label>
                                            <select id="food-catagory" class="form-control border-input"
                                                    placeholder="Here can be your description" value="Mike">
                                                <option value="">Food</option>
                                                <option value="">Food</option>
                                                <option value="">Food</option>
                                                <option value="">Food</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Product Details</label>
                                            <textarea  class="form-control border-input" rows="6"
                                                       placeholder="Product Details"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Product-image" class="file-upload">Upload Product Image</label>
                                            <input id="Product-image" type="file" class="form-control border-input">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control border-input" placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Sale Price</label>
                                            <input type="text" class="form-control border-input"
                                                   placeholder="Sale Price">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Offer Price</label>
                                            <input type="number" class="form-control border-input"
                                                   placeholder="Offer Price">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Add Product
                                    </button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection