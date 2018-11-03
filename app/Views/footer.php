    <div class="push"></div>
</div>
<footer class="footer">
    <div class="row">
        <div class="col-md-12">
            <span class="glyphicon glyphicon-copyright-mark"></span> Copyright
        </div>
    </div>
    <?php
    if ($country !== null):?>
        <div class="row">
            <div class="col-md-12">
                You're logged in from: <b> <?php echo $country; ?> </b>
            </div>
        </div>
    <?php endif; ?>
</footer>
</body>
</html>