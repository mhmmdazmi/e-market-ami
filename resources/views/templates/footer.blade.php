<footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 1.1.0
                </div>
                <strong>Copyright &copy; 2023 Celaz. <a href="https://adminlte.io"></a></strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('plugins') }}/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('adminlte3') }}/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('adminlte3') }}/dist/js/demo.js"></script>
        <script src="{{ asset('js') }}/sweetalert211.js"></script>
        <script src="{{ asset('plugins') }}/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('plugins') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    @stack('script')
    </body>
    </html>