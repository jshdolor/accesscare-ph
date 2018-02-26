    <!-- footer starts here -->
    <footer class="footer clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 footer-para">
                    <p>&copy;<?=APP_NAME?> All right reserved</p>
                </div>
                <div class="col-xs-6 text-right">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-skype"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- script tags
    ============================================================= -->
    <?php foreach($scripts as $script) : ?>
    <script type="text/javascript" src="<?=$script?>"></script>
    <?php endforeach; ?>
    
</body>
</html>