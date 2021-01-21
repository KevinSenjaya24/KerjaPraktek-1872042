<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QG76HS3J73"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-QG76HS3J73');
    </script>
    @yield('seoTag')
    <!-- Scripts -->
    <link rel="shortcut icon" href="{{asset('images/about/logo.png')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
    <!-- datatables style -->
    <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GKII Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin-assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('admin-assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">

    <link href="{{ asset('admin-assets/css/animate.css') }}" rel="stylesheet">

    @yield('pluginLink')
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    <!-- Custom CSS -->
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/style-custom.css') }}" rel="stylesheet">
    <!--    File Upload-->
    <link rel="stylesheet" href="{{ asset('plugins/bower_components/dropify/dist/css/dropify.min.css') }}">
    <!-- color CSS -->
    <link href="{{ asset('admin-assets/css/colors/default.css') }}" id="theme" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <script src="{{asset('tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>
    <script>
        var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
            tinymce.init({
            selector: 'textarea',
            plugins: 'print preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker imagetools textpattern noneditable help formatpainter permanentpen pageembed charmap tinycomments mentions quickbars linkchecker emoticons advtable',
            tinydrive_token_provider: 'URL_TO_YOUR_TOKEN_PROVIDER',
            tinydrive_dropbox_app_key: 'YOUR_DROPBOX_APP_KEY',
            tinydrive_google_drive_key: 'YOUR_GOOGLE_DRIVE_KEY',
            tinydrive_google_drive_client_id: 'YOUR_GOOGLE_DRIVE_CLIENT_ID',
            mobile: {
                plugins: 'print preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker textpattern noneditable help formatpainter pageembed charmap mentions quickbars linkchecker emoticons advtable'
            },
            menu: {
                tc: {
                title: 'TinyComments',
                items: 'addcomment showcomments deleteallconversations'
                }
            },
            menubar: 'file edit view insert format tools table tc help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [
                { title: 'My page 1', value: 'http://www.tinymce.com' },
                { title: 'My page 2', value: 'http://www.moxiecode.com' }
            ],
            image_list: [
                { title: 'My page 1', value: 'http://www.tinymce.com' },
                { title: 'My page 2', value: 'http://www.moxiecode.com' }
            ],
            image_class_list: [
                { title: 'None', value: '' },
                { title: 'Some class', value: 'class-name' }
            ],
            importcss_append: true,
            templates: [
                    { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            spellchecker_whitelist: ['Ephox', 'Moxiecode'],
            tinycomments_mode: 'embedded',
            content_style: '.mymention{ color: gray; }',
            contextmenu: 'link image imagetools table configurepermanentpen',
            a11y_advanced_options: true,
            skin: useDarkMode ? 'oxide-dark' : 'oxide',
            content_css: useDarkMode ? 'dark' : 'default',
            });
    </script>

</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader" style="background-color:white;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    @include('admin.layouts.alert')
@include('sweetalert::alert')
    @yield('wrapper')

    <!-- logout form  -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin-assets/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin-assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('admin-assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('admin-assets/js/jquery.slimscroll.js') }}"></script>

    @yield('pluginScript')

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin-assets/js/custom.js') }}"></script>
    <!-- Custom tab JavaScript -->
    <script src="{{ asset('admin-assets/js/cbpFWTabs.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
    <!--Style Switcher -->
    <script src="{{ asset('admin-assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    @yield('customScript')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(function() {
            $('.selectpicker').selectpicker();
        });
    </script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTable1').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableFebruari').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableMaret').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableApril').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableMei').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableJuni').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableJuli').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableAgustus').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableSeptember').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableOktober').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableNovember').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableDesember').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableJemaat').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableLaguIbadah').DataTable();
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('#myTableUltah').DataTable();
        } );
    </script>
   <script src="{{ asset('plugins/bower_components/sweetalert/sweetalert.css')}}"></script>
    <script src="{{ asset('plugins/bower_components/sweetalert/sweetalert.min.js')}}"></script>
    <script src="../plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</body>

</html>
