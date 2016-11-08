<?php
    include("Extensions/Constants.php");

    $page = $_GET['page'];

    $itemsPerPage = Constants::$galleryImagesPerPage;

    $dir = Constants::$galleryImagesDirectory;
    $ImagesA = Constants::Get_ImagesFromFolder($dir);

    $totalItems = count($ImagesA);

    $start = ($page - 1) * $itemsPerPage;
    $end = $itemsPerPage *  $page;

    $pagesCount = ceil($totalItems / $itemsPerPage);

    echo '<div class="galleryContainer" id="gall">';
        for ($i = $start; $i < $end; $i++) {
            $currentImage = $dir . $ImagesA[$i];
            if($totalItems > $i){
                echo    '<a class="img-simple" href="' . $currentImage . '" data-lightbox="cars">'.
                            '<img class="zoom img-small" src="' . $currentImage . '" data-zoom-image="'. $currentImage .'"/>'.
                        '</a>';
            }
        }
    echo '</div>';
?>

<ul class="pagination" id="pages">
    <?php
    for ($i = 1; $i <= $pagesCount; $i++) {
        echo '<li><a href="?page='. $i . '">' . $i . '</a></li>';
    }
    ?>
</ul>

<script>
    $('ul.pagination li ').on('click', function (e) {
        e.preventDefault();
        var element = $(this).find('a');
        var url = 'http://localhost:63342/MartyWebSite/PHP/pagination.php' + element.attr('href');
        console.log(element.attr('href'));
        $.ajax({
            url: url,
            success: function (response) {
                console.log(response);
                $('.img-list-inner').html(response);
            }
        })
    })
</script>
