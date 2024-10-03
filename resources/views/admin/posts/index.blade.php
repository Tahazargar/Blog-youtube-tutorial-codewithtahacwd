@extends('admin.layouts.master')

@section('content')
    <div class="content-container mx-5 py-5">
            <section class="main-body-container-header">
                <h5>
                    Posts
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.posts.create') }}" class="btn btn-info btn-sm">Create Post</a>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Descriptions</th>
                        <th>Status</th>
                        <th>Slug</th>
                        <th>Tags</th>
                        <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> Setting</th>
                    </tr>
                    </thead>
                    <tbody>

                   @foreach($posts as $key => $post)
                       <tr>
                           <td>{{ $key = $key + 1 + ($posts->currentPage() - 1) * $posts->perPage() }}</td>
                           <td>{{ $post->title }}</td>
                           <td>{{ Str::limit($post->description, 25) }}</td>
                           <td>
                               <input id="" type="checkbox" @if($post->status == '1') checked @endif  data-url="">
                           </td>
                           <td>{{ $post->slug }}</td>
                           <td>{{ $post->tags }}</td>
                           <td class="width-16-rem text-center">
                               <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                               <form action="{{ route('admin.posts.destroy', $post) }}" class="d-inline" method="POST">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i> Delete</button>
                               </form>
                           </td>
                       </tr>
                   @endforeach

                    </tbody>
                </table>
            </section>
        {{ $posts->links() }}
    </div>
@endsection
