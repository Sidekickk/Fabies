<div class="img-list-inner">
    <script>
        var url = 'http://localhost:63342/MartyWebSite/PHP/pagination.php?page=1';
        $.ajax({
            url: url,
            success: function (response) {
                console.log(response);
              $('.img-list-inner').html(response);
            }
        });
   </script>
</div>

<script src="../JavaScript/lightbox.js"></script>



