<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
<script src="{{ asset('assets/plugins/respond.min.js') }}"></script>
<script src="{{ asset('assets/plugins/excanvas.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jQuery/jquery-1.11.1.min.js') }}"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="{{ asset('assets/plugins/jQuery/jquery-1.11.1.min.js') }}"></script>
<!--<![endif]-->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/blockUI/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/plugins/iCheck/jquery.icheck.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/bootbox/bootbox.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.appear/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('assets/plugins/velocity/jquery.velocity.min.js') }}"></script>
<script src="{{ asset('assets/plugins/TouchSwipe/jquery.touchSwipe.min.js') }}"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<script src="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-mockjax/jquery.mockjax.js') }}"></script>
<script src="{{ asset('assets/plugins/toastr/toastr.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
<script src="{{ asset('assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/truncate/jquery.truncate.js') }}"></script>
<script src="{{ asset('assets/plugins/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/subview.js') }}"></script>
<script src="{{ asset('assets/js/subview-examples.js') }}"></script>
<script src="{{ asset('assets/js/ui-notifications.js') }}"></script>
<script src="{{ asset('assets/js/echarts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/sweetalert/lib/sweet-alert.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js') }}"></script>
<script src="{{ asset('assets/plugins/autosize/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-maskmoney/jquery.maskMoney.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<!-- <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/commits.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') }}"></script> -->
<script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="assetsjs/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/chart-master/Chart.js') }}"></script>
<script src="{{ asset('assets/js/respond.min.js') }}" ></script>
<script src="{{ asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('assets/chart-master/Chart.js') }}"></script>
<script src="{{ asset('assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/plugins/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('assets/js/form-elements.js') }}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<!-- start: CORE JAVASCRIPTS  -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/global-function.js') }}"></script>
<script src="{{ asset('assets/js/api-config.js') }}"></script>
<!-- end: CORE JAVASCRIPTS  -->
<script>
	jQuery(document).ready(function() {
		Main.init();
		SVExamples.init();
		FormElements.init();
		UINotifications.init();
	});
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	});
</script>