@extends('admin.layouts.wrapper')

@section('seoTag')
    <meta name="description" content="">
    <meta name="author" content="">
@endsection

@section('pluginLink')
    <!-- toast CSS -->
    <link href="{{ asset('admin-assets/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset('admin-assets/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{ asset('admin-assets/plugins/bower_components/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="{{ asset('admin-assets/plugins/bower_components/calendar/dist/fullcalendar.css') }}" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="{{ asset('admin-assets/css/animate.css') }}" rel="stylesheet">
    
@endsection

@section('pageTitle', 'POST Management')

@section('actionBar')
@endSection

@section('pageContent')
    @if (session('success'))
        <br><br>
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <br><br>
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="modal fade" id="tabelpelayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                <form action="{{ route('admin.post.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-body">
                            <h3 class="box-title black">Form Post Details</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="category">Category</label>
                                        <select class="form-control selectpicker" data-live-search="true" name="category_post_id">
                                            @foreach($posts as $post)
                                                <option value="{{$post->category_post_id}}" >{{$post->category_post_id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" aria-describedby="post" placeholder="Enter Title">     
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="excerpt">Excerpt</label>
                                        <input type="text" name="excerpt" class="form-control" id="title"  aria-describedby="post" placeholder="Enter Excerpt">
                                    </div>
                                </div>
                                    <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tanggal Post</label>
                                        <input class="form-control" type="date" name="tanggal" id="example-date-input">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Aktif</label>
                                        <select class="form-control" name="aktif" id="aktif">
                                            <option value="Aktif">Aktif</option>
                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Photo</label>
                                        <input type="file" name="photo" class="form-control" accept="image/png, image/jpeg">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label class="control-label" for="content">Content</label>
                                        <textarea name="content"></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save changes</button>
                        </div>
                    </form>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="tabelpelayanan1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                <form action="{{ route('admin.post.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-body">
                            <h3 class="box-title black">Form Post Details</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="category">Category</label>
                                        <select class="form-control selectpicker" data-live-search="true" name="category_post_id">
                                            @foreach($posts as $post)
                                                <option value="{{$post->category_post_id}}" >{{$post->category_post_id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="excerpt">Pengumuman</label>
                                        <input type="text" name="excerpt" class="form-control" id="title"  aria-describedby="post" placeholder="Enter Pengumuman">
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tanggal Post</label>
                                        <input class="form-control" type="date" name="tanggal" id="example-date-input">
                                    </div>
                                </div>
                                    <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Aktif</label>
                                        <select class="form-control" name="aktif" id="aktif">
                                            <option value="Aktif">Aktif</option>
                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <hr>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save changes</button>
                        </div>
                    </form>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
            <div class="row">
                <div class="col-md-11">
                    <h3 class="box-title m-b-0 black">Table Post</h3>
                </div>
                <div class="col-md-1">
                @if($categories->id == "4")
                <button type="button" class="btn btn-outline btn-info m-b-0 waves-effect waves-light" data-toggle="modal" data-target="#tabelpelayanan1">
                        Add
                    </button>
                @else
                    <button type="button" class="btn btn-outline btn-info m-b-0 waves-effect waves-light" data-toggle="modal" data-target="#tabelpelayanan">
                        Add
                    </button>
                @endif
                </div>
            </div>
            <hr>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                            @if($categories->id == "4")
                                <th>No</th>
                                <th>Category</th>
                                <th>Excerpt</th>
                                <th>Tanggal</th>
                                <th>Aktif</th>
                                <th>Action</th>
                            @else
                                <th>No</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Excerpt</th>
                                <th>Tanggal</th>
                                <th>Aktif</th>
                                <th>Photo</th>
                                <th>Action</th>
                            @endif
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 0;?>
                        @foreach($posts as $post)
                        <?php $no++ ;?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>
                                @if($post->category_post_id == "2")
                                    Renungan Harian
                                @elseif($post->category_post_id == "3")
                                    Warta Jemaat
                                @elseif($post->category_post_id == "4")
                                    Pengumuman
                                @endif
                                </td>
                                @if($post->category_post_id == "4")
                                <td>{{$post->excerpt}}</td>
                                <td>{{$post->tanggal}}</td>
                                <td>{{$post->active}}</td>
                                <td>
                                    <a href="{{ route('admin.post.detail',$post->id) }}" name="edit_id" value="{{$post->id}}">
                                        <button class="btn btn-primary">
                                            <i class="mdi mdi-border-color"></i>
                                        </button>
                                    </a>
                                    <form method="POST" action="{{route('admin.post.delete', $post->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('yakin menghapus da ?')">
                                            <i class="mdi mdi-delete-circle"></i>
                                        </button>
                                    </form>
                                </td>
                                @else
                                <td>{{$post->title}}</td>
                                <td>{{$post->excerpt}}</td>
                                <td>{{$post->tanggal}}</td>
                                <td>{{$post->active}}</td>
                                <td><img src="{{asset('storage/'.$post->photo)}}" height="50"/></td>
                                <td>
                                    <a href="{{ route('admin.post.detail',$post->id) }}" name="edit_id" value="{{$post->id}}">
                                        <button class="btn btn-primary">
                                            <i class="mdi mdi-border-color"></i>
                                        </button>
                                    </a>
                                    <form method="POST" action="{{route('admin.post.delete', $post->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('yakin menghapus da ?')">
                                            <i class="mdi mdi-delete-circle"></i>
                                        </button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('pluginScript')
    <!--Wave Effects -->
    <script src="{{ asset('admin-assets/js/waves.js') }}"></script>
    <!--Counter js -->
    <script src="{{ asset('admin-assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('admin-assets/plugins/bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/bower_components/morrisjs/morris.js') }}"></script>
    <!-- chartist chart -->
    <script src="{{ asset('admin-assets/plugins/bower_components/chartist-js/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!-- Calendar JavaScript -->
    <script src="{{ asset('admin-assets/plugins/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/bower_components/calendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/bower_components/calendar/dist/cal-init.js') }}"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
@endsection

@section('customScript')
    <script type="text/javascript">
        (function() {
            [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });
        })();
    </script>
@endsection
