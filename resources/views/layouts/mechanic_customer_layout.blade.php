
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Admin Home</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	<link href="{!!asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')!!}" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<link href="{!!asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('assets/global/plugins/clockface/css/clockface.css')!!}" rel="stylesheet" type="text/css" />

	<link href="{!!asset('assets/global/plugins/datatables/datatables.min.css')!!}" rel="stylesheet" type="text/css" />
  <link href="{!!asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')!!}" rel="stylesheet" type="text/css"/>

	<link href="{!!asset('assets/global/plugins/fancybox/source/jquery.fancybox.')!!}" rel="stylesheet" type="text/css" />
  <link href="{!!asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css')!!}" rel="stylesheet" type="text/css" />
  <link href="{!!asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css')!!}" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL STYLES -->
	<link href="{!!asset('assets/global/css/components.min.css')!!}" rel="stylesheet" id="style_components" type="text/css" />
	<link href="{!!asset('assets/global/css/plugins.min.css')!!}" rel="stylesheet" type="text/css" />
	<!-- END THEME GLOBAL STYLES -->
	<!-- BEGIN THEME LAYOUT STYLES -->
	<link href="{!!asset('assets/layouts/layout/css/layout.min.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('assets/layouts/layout/css/themes/blue.min.css')!!}" rel="stylesheet" type="text/css" id="style_color" />
	<link href="{!!asset('assets/layouts/layout/css/custom.min.css')!!}" rel="stylesheet" type="text/css" />
	<!-- END THEME LAYOUT STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
	<script type="text/javascript" rel="stylesheet" type="text/javascript"
	src="{!!asset('js/plugins/ckeditor/ckeditor.js')!!}"></script>
	<script src="{!!asset('assets/global/plugins/jquery.min.js')!!}" type="text/javascript"></script>



	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<link href="{!!asset('assets/global/plugins/fancybox/source/jquery.fancybox.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css')!!}" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL STYLES -->
	<!-- END THEME GLOBAL STYLES -->
	<!-- BEGIN THEME LAYOUT STYLES -->
	<!-- END THEME LAYOUT STYLES -->
	<link href="{!!asset('backend/select2-4.0.3/dist/css/select2.min.css')!!}" rel="stylesheet" type="text/css" rel="stylesheet"/>
	<script type="text/javascript" src="{!!asset('backend/select2-4.0.3/dist/js/select2.full.js')!!}"></script>
	<script src="{!!asset('backend/select2-4.0.3/dist/js/select2.min.js')!!}"></script>

</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	@yield('content_header')
	@yield('slide')
	@yield('footer')
	<script src="{!!asset('assets/global/plugins/jquery.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/js.cookie.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/jquery.blockui.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')!!}" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="{!!asset('assets/global/plugins/moment.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/clockface/js/clockface.js')!!}" type="text/javascript"></script>

	<script src="{!!asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js')!!}" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL SCRIPTS -->
	<script src="{!!asset('assets/global/scripts/app.min.js')!!}" type="text/javascript"></script>
	<!-- END THEME GLOBAL SCRIPTS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{!!asset('assets/pages/scripts/components-date-time-pickers.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/pages/scripts/form-fileupload.min.js')!!}" type="text/javascript"></script>

	<script src="{!!asset('assets/global/scripts/datatable.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/global/plugins/datatables/datatables.min.js')!!}" type="text/javascript"></script>
  <script src="{!!asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')!!}" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME LAYOUT SCRIPTS -->
	<script src="{!!asset('assets/layouts/layout/scripts/layout.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/layouts/layout/scripts/demo.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/layouts/global/scripts/quick-sidebar.min.js')!!}" type="text/javascript"></script>
	<script src="{!!asset('assets/pages/scripts/table-datatables-managed.min.js')!!}" type="text/javascript"></script>
	<script src="{{asset('backend/js/product_create.js')}}"></script>
	<script src="{{asset('frontend/js/ajax_handle.js')}}"></script>



	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN THEME GLOBAL SCRIPTS -->
	<!-- END THEME GLOBAL SCRIPTS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME LAYOUT SCRIPTS -->

</body>
</html>
