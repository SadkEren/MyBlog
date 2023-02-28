@extends('layouts.default2')

@section('content')

<div class="row">
    <div class="container-fluid">
        <div class="col-xl-12 col-lg-7">
            <h3>Add Contact Page</h3>
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form action="{{url('/admin/addContactNew')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       
                        <div class="mb-3">
                            <label class="form-label">Email </label>
                            <input name="email" maxlength="250" type="text" class="form-control"  required placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input name="phone" maxlength="100"  type="text" class="form-control" required placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Instagram</label>
                            <input name="instagram" maxlength="250" typetype="text" class="form-control"  required placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Twitter</label>
                            <input name="twitter" maxlength="250" typetype="text" class="form-control" required placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Linkedin</label>
                            <input name="linkedin" maxlength="250" typetype="text" class="form-control" required placeholder="">
                        </div>
                            <button class="btn btn-primary" type="submit" id="button-addon2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('ckeditor2')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#about-content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection