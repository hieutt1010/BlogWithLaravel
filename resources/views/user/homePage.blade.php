 @extends('layouts.mainPage')
@section('title', $title)
{{-- title TRang chu --}}

@section('post')
<div class="row tm-row" id="myUL">
    @foreach ($post as $item)
        <article class="col-12 col-md-6 tm-post">
            <hr class="tm-hr-primary">
            {{-- {{url('admin/post/'.$post_Edit->id)}} --}}
            <a href="{{url('user/'.$item->id )}}" class="effect-lily tm-post-link tm-pt-60"  style="text-decoration: none;">
                <div class="tm-post-link-inner">
                    <img style="height: 300px" src="{{asset('img/'.$item->postImage)}}" alt="Image" class="img-fluid">
                </div>
                <span class="position-absolute tm-new-badge">New</span>
                <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$item->postTitle}} </h2>
            </a>
            <p class="tm-pt-30">
                {{$item->shortDesc}}
            </p>
            <div class="d-flex justify-content-between tm-pt-45">
                <span class="tm-color-primary">{{$item->catTitle}}</span>
                <span class="tm-color-primary">{{$item->publishTime}}</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <p>
                    Bình luận:  <span class="fb-comments-count" data-href="http://127.0.0.1:8000/user/. {{$item->id}}"></span>
                 </p>
                 <script async defer crossorigin="anonymous"
                 src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=3550241328394741  " nonce="YJi4JYUu"></script>
                 <span>Tác giả: {{$item->author}}</span>
            </div>
        </article>
    @endforeach
    <div class="row tm-row tm-mt-100 tm-mb-75 customSVG" style="width: 100%">
        {{ $post->links() }}
    </div>
</div>
       {{-- pagination --}}

@endsection
