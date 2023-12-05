<footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
            Copyright &copy; <span id="copy-year"></span> <a class="text-primary" href="<?php echo e(env('APP_LINK')); ?>"
                target="_blank"><?php echo e(env('APP_COMPANY')); ?></a>
        </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
</footer>

</div> <!-- End Page Wrapper -->
</div> <!-- End Wrapper -->



<!-- <script type="module">
    import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

    const el = document.createElement('pwa-update');
    document.body.appendChild(el);
</script> -->


<script src="<?php echo e(URL::asset('main/assets/dist/bootstrap-5.2.3/js/bootstrap.bundle.min.js')); ?>"></script>


<script src="<?php echo e(URL::asset('main/assets/dist/popper.min.js')); ?>"></script>


<script src="<?php echo e(URL::asset('main/assets/dist/bootstrap-5.2.3/js/bootstrap.min.js')); ?>"></script>

<!-- Javascript -->
<script src="<?php echo e(URL::asset('main/assets/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('main/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('main/assets/plugins/simplebar/simplebar.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('main/assets/plugins/charts/Chart.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('main/assets/js/chart.js')); ?>"></script>
<script src="<?php echo e(URL::asset('main/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('main/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')); ?>"></script>
<script src="<?php echo e(URL::asset('main/assets/js/vector-map.js')); ?>"></script>
<script src="<?php echo e(URL::asset('main/assets/plugins/daterangepicker/moment.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('main/assets/plugins/daterangepicker/daterangepicker.js')); ?>"></script>

<script src="<?php echo e(URL::asset('main/assets/plugins/toastr/toastr.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('main/assets/js/sleek.js')); ?>"></script>
<link href="<?php echo e(URL::asset('main/assets/options/optionswitch.css')); ?>" rel="stylesheet">
<script src="<?php echo e(URL::asset('main/assets/options/optionswitcher.js')); ?>"></script>



<script src="<?php echo e(URL::asset('main/assets/dist/jquery-3.5.1.js')); ?>"></script>


<script src="<?php echo e(URL::asset('main/assets/dist/datatables/1.13.5/js/jquery.dataTables.min.js')); ?>"></script>


<script src="<?php echo e(URL::asset('main/assets/dist/datatables/rowreorder/1.3.3/js/dataTables.rowReorder.min.js')); ?>">
</script>


<script src="<?php echo e(URL::asset('main/assets/dist/datatables/responsive/2.4.1/js/dataTables.responsive.min.js')); ?>">
</script>


<script src="<?php echo e(URL::asset('main/assets/dist/ajax/libs/moment.js/2.29.2/moment.min.js')); ?>"></script>


<script src="<?php echo e(URL::asset('main/assets/dist/datatables/datetime/1.5.1/js/dataTables.dateTime.min.js')); ?>"></script>


<script>
    $(document).ready(function() {
        $(".alert").delay(5000).slideUp(200, function() {
            $(this).alert('close');
        });
    });
</script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            removePlugins: ['blockQuote', 'link'],
            toolbar: ['Heading', 'bold', 'italic', 'bulletedList', 'numberedList']
        })
        .catch(error => {
            // console.error(error);
        });
</script>



</body>

</html>
<?php /**PATH C:\laragon\www\e-data\resources\views/admin/includes/footer.blade.php ENDPATH**/ ?>