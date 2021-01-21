@extends('layouts.app')
@section('content')
<div class="container jumbo">
    <div class="row justify-content-center">
        <div class="col-10 info-post btn btn-primary">
            <div class="row">
                <div class="col-lg" style="font-family: gotham rounded; ">
                    <div div class="float-sm-center">
                        <h3 class="post">Renungan Harian</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-section page">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 py-3">
          @foreach($renunganharians as $renunganharian)
          <article class="blog-entry">
            <div class="entry-header">
              <div class="post-thumbnail">
                <img src="{{asset('storage/'.$renunganharian->photo)}}" alt="">
              </div>
              <div class="post-date">
                <h3>{{ date("d", strtotime($renunganharian->tanggal)) }}</h3>
                <span>{{ date("F", strtotime($renunganharian->tanggal)) }}</span>
              </div>
            </div>
            <h1>
              {{$renunganharian->title}}
            </h1>
            <div class="entry-meta mb-2">
              <div class="meta-item entry-author">
                <div class="icon">
                  <span class="mai-person"></span>  
                </div>
                by <a href="#">Admin</a>
              </div>
              <div class="meta-item">
                <div class="icon">
                  <span class="mai-pricetags"></span>
                </div>
                Category : 
                {{$renunganharian->category_post_id}}
              </div>
            </div>
            <div class="entry-content">
              <p>{{$renunganharian->excerpt}}</p>
            </div>
            <a href="{{ route('postdetail',$renunganharian->id) }}" class="btn btn-primary button">Continue Reading</a>
          </article>
          @endforeach
          {{ $renunganharians->links() }}
        </div>
        <!-- Sidebar -->
        <div class="col-lg-4 py-3">
        <div class="widget-wrap">
              <h3 class="widget-title">Category</h3>
              <ul class="categories">
                <li><a href="/warta-jemaat">Warta Jemaat <span>{{$countWartajemaat}}</span></a></li>
                <li><a href="/renungan">Renungan Harian <span>{{$countRenunganharian}}</span></a></li>
                <li><a href="/pengumuman">Pengumuman <span>{{$countPengumuman}}</span></a></li>
              </ul>
            </div>

            <div class="widget-wrap">
              <h3 class="widget-title">Recent Post</h3>
              @foreach ($posts as $post)
              <div class="blog-widget">
                <div class="blog-img">
                  <img src="{{asset('storage/'.$post->photo)}}" alt="">
                </div>
                <div class="entry-footer">
                  <div class="blog-title mb-2">{{$post->title}}</div>
                  <div class="meta">
                    <a href="#"><span class="icon-calendar"></span> {{ date("d F Y", strtotime($post->tanggal)) }}</a>
                    <a href="#"><span class="icon-person"></span> Admin</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div> <!-- end sidebar -->
      </div>
    </div>
  </div>
  @endsection