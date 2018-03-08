    <!-- footer starts here -->
    <footer class="footer clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 footer-para">
                    <p>&copy;<?=APP_NAME?> All right reserved</p>
                </div>
                <div class="col-xs-6 text-right">
                    <a href="https://www.facebook.com/Access-Care-Management-Consultancy-573498216333188/"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- script tags
    ============================================================= -->
    <?php foreach($scripts as $script) : ?>
        <?php if(is_array($script)): ?>
            <script <?=$script['attr']?> type="text/javascript" src="<?=$script['url']?>"  ></script>
        <?php else: ?>
            <script type="text/javascript" src="<?=$script?>"></script>
        <?php endif; ?>
    <?php endforeach; ?>
    <!-- messages -->

    <script type="text/javascript">
        <?php if($this->session->flashdata('success')): ?>
            swal("Mail Sent!", "Thank you for your message!", "success");
        <?php endif; ?>
        <?php if($this->session->flashdata('error')): ?>
            swal("Mail NOT Sent!", "Please try again..", "error");
        <?php endif; ?>
    </script>
    
</body>
</html>