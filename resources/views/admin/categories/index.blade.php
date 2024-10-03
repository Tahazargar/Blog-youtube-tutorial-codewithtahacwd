@extends('admin.layouts.master')

@section('content')
    <div class="content-container mx-5 py-5">
            <section class="main-body-container-header">
                <h5>
                    Categories
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.categories.create') }}" class="btn btn-info btn-sm">Create Category</a>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category name</th>
                        <th>Descriptions</th>
                        <th>Status</th>
                        <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> Setting</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <input id="" type="checkbox"  data-url="">
                            </td>
                            <td class="width-16-rem text-center">
                                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                <form action="" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i> Delete</button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>
    </div>
@endsection
