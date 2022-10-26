@extends('admin.master')

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Slider</h3></div>
                        <div class="card-body">
                            <form action="{{ route('create-slider') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="title" type="text" name="title" placeholder="title" />
                                    <label for="title">Title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="content" type="text" name="content" placeholder="content" />
                                    <label for="content">Content</label>
                                </div>
                                
                                <div class="form-floating input-group mb-3">
                                <div class="input-group-text">Image</div> 
                                   <input class="form-control" id="image" type="file" name="image" placeholder="image" />
                                </div>

                                <div class="d-sm-grid">
                                    <input type="submit" class="btn btn-primary" value="New Slider"> 
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                           Add Your New Slider at Home Page Banner
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
