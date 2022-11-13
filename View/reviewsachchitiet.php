
<?php
        $id=isset($_GET['id'])?$_GET['id']:'';
        $rv=new reviewsach();
        $r=$rv->getReview($id);
        
    ?>
<div class="row mt-4 ">
    <div class="col-8 ">
        <h1 class="text-center"><?php echo $r['title']; ?></h1>
        <img src="./content/IMG PHP/reviewsach/<?php echo $r['hinh']; ?>" alt="">
        <?php echo '<p>'.$r['noidung'].'</p>' ?>
        
    </div>
</div>

