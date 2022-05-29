<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="{{URL::asset('assets/vendor/global/global.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
{{--<script src="{{URL::asset('assets/js/custom.min.js')}}"></script>--}}
<script src="{{URL::asset('assets/js/dlabnav-init.js')}}"></script>

<!-- Chart sparkline plugin files -->
<script src="{{URL::asset('assets/./vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{URL::asset('assets/./js/plugins-init/sparkline-init.js')}}"></script>

<!-- Chart Morris plugin files -->
<script src="{{URL::asset('assets/./vendor/raphael/raphael.min.js')}}"></script>
<script src="{{URL::asset('assets/./vendor/morris/morris.min.js')}}"></script>

<!-- Init file -->
<script src="{{URL::asset('assets/./js/plugins-init/widgets-script-init.js')}}"></script>

<!-- Demo scripts -->
<script src="{{URL::asset('assets/js/dashboard/dashboard.js')}}"></script>

<!-- Summernote -->
<script src="{{URL::asset('assets/./vendor/summernote/js/summernote.min.js')}}"></script>
<!-- Summernote init -->
<script src="{{URL::asset('assets/./js/plugins-init/summernote-init.js')}}"></script>

<!-- Svganimation scripts -->
<script src="{{URL::asset('assets/vendor/svganimation/vivus.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/svganimation/svg.animation.js')}}"></script>
@yield('js-script')

