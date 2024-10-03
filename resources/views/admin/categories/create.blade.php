@extends('admin.layouts.master')

@section('content')
    <div class="content-container mx-5 py-5">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        Create category
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-info btn-sm">Return back</a>
                </section>

                <section>
                    <form id="form" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Category name</label>
                                    <input type="text" class="form-control form-control-sm" name="name" id="name" value="">
                                </div>
                                @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{--$message--}}
                                </div>
                                @enderror
                            </section>


                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <input type="hidden" class="form-control form-control-sm" name="tags" id="tags">
                                    <select id="select_tags" class="select2 form-control form-control-sm" multiple></select>
                                </div>
                                @error('tags')
                                <div class="alert alert-danger" role="alert">
                                    {{--$message--}}
                                </div>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="" class="form-control form-control-sm" id="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control form-control-sm" name="image" id="image">
                                </div>
                                @error('image')
                                <div class="alert alert-danger" role="alert">
                                    {{--$message--}}
                                </div>
                                @enderror
                            </section>


                            <section class="col-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" id="description"  class="form-control form-control-sm" rows="6">
                                        {{ old('description') }}
                                    </textarea>
                                </div>
                                @error('description')
                                <div class="alert alert-danger" role="alert">
                                    {{--$message--}}
                                </div>
                                @enderror
                            </section>


                            <section class="col-12">
                                <button class="btn btn-primary btn-sm">Submit</button>
                            </section>
                        </section>
                    </form>
                </section>

            </section>
        </div>
@endsection

@section('scripts')
    <script src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>

    <script>
        $(document).ready(function () {
            var tags_input = $('#tags');
            var select_tags = $('#select_tags');
            select_tags.select2({
                placeholder : 'Enter your tags',
                tags: true
            });
            $('#form').submit(function ( event ){
                if(select_tags.val() !== null && select_tags.val().length > 0){
                    var selectedSource = select_tags.val().join(',');
                    tags_input.val(selectedSource)
                }
            })
        })
    </script>
@endsection
