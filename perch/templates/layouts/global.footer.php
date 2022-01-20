

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
        <small>Saltburn Folk Festival is a not-for-profit company limited by guarantee, registered in England company number 11821526</small>
        <small>Registered office: SC&AA, Albion Terrace, Saltburn by the Sea, North Yorkshire, TS12 1JW</small>
        <small>Directors: Stephen Michael Bullock, (Patron) Nigel Peter Carden (Company Secretary), Elinor Creaby-Attwood, Ellen Mather, Jack Hogsden.</small>
        <a href="/"><small>Read out Privacy Notice</small></a>
    </div>
</footer>
</body>
<script src="/assets/js/index.js"></script>

</html>