

</div>
<footer class="l-block l-block--secondary">
    <div class="l-restrict c-footer">
        <!-- <div class="c-socials c-footer__socials">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
        </div> -->
        <?php perch_content_create("Social Icons", [ "template" => "socials.html", "data" => [ "type" => "c-footer__socials" ] ]); ?>
        <?php perch_content_custom("Social Icons") ?>
        <?php perch_content('Footer'); ?>
        <?php perch_content_create("Footer Links", [ "template" => "legal.html" ]) ?>
        <?php perch_content_custom("Footer Links"); ?>
    </div>
</footer>
</body>
<script src="/assets/js/index.js"></script>

</html>