    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assets'); ?>/vendor/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="<?= base_url('assets'); ?>/dist/js/app-style-switcher.js"></script>
    <script src="<?= base_url('assets'); ?>/dist/js/feather.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/dist/js/sidebarmenu.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/extra-libs/sparkline/sparkline.js"></script>

    <!--Custom JavaScript -->
    <script src="<?= base_url('assets'); ?>/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?= base_url('assets'); ?>/vendor/extra-libs/c3/d3.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/extra-libs/c3/c3.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url('assets'); ?>/dist/js/pages/dashboards/dashboard1.min.js"></script>
    <!--This page plugins -->
    <script src="<?= base_url('assets'); ?>/vendor/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets'); ?>/dist/js/pages/datatable/datatable-basic.init.js"></script>

    <!-- Chart JS -->
    <script src="<?= base_url('assets'); ?>/vendor/libs/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url('assets'); ?>/dist/js/doughnut.js"></script>
    <script type="text/javascript">
        function showTime() {
            var a_p = "";
            var today = new Date();
            var curr_hour = today.getHours();
            var curr_minute = today.getMinutes();
            var curr_second = today.getSeconds();
            if (curr_hour < 12) {
                a_p = "AM";
            } else {
                a_p = "PM";
            }
            if (curr_hour == 0) {
                curr_hour = 12;
            }
            if (curr_hour > 12) {
                curr_hour = curr_hour - 12;
            }
            curr_hour = checkTime(curr_hour);
            curr_minute = checkTime(curr_minute);
            curr_second = checkTime(curr_second);
            document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
        setInterval(showTime, 500);
    </script>
    <!-- Menampilkan Hari, Bulan dan Tahun -->
    <script type='text/javascript'>
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth();
        var thisDay = date.getDay(),
            thisDay = myDays[thisDay];
        var yy = date.getYear();
        var year = (yy < 1000) ? yy + 1900 : yy;
        document.getElementById('date').innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
    </script>

    <script>
        //Delete dg Modal
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>

    <!--Date Picker-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript">
        $(function() {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

        });
    </script>
    </body>

    </html>