@extends('layouts.app')
@section('content')

<div class="container jumbo">
    <div class="row justify-content-center">
        <div class="col-8 info-post btn btn-primary">
            <div class="row">
                <div class="col-lg" style="font-family: gotham rounded; ">
                    <div div class="float-sm-center">
                        <h3 class="post">Lagu Detail</h3>
                        <p><b>1 Tawarikh 16:9</b></p>
                        <p><sup>16:9</sup> “Bernyanyilah bagi-Nya, 
                        bermazmurlah bagi-Nya, percakapkanlah segala perbuatan-Nya yang ajaib!”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-section">
    <div class="container">
      <div class="row">
            <div class="col-lg-12 py-3">
                <article class="blog-single-entry">
                    
                    <h1 class="post-title">{{$detailslagu->lagu->judul}}</h1>
                    <div class="entry-meta mb-4 post-title">
                        <div class="meta-item">
                            <div class="icon">
                            <span class="mai-pricetags"></span>
                            </div>
                            Category : 
                            {{$detailslagu->lagu->category}}
                        </div>
                    </div>
                    <div class="entry-content">
                        {!! $detailslagu->lagu->isi !!} 
                    </div>
                </article>
            </div>

        </div> <!-- .row -->
    </div>
  </div>
  @endsection