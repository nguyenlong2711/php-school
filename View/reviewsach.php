<!-- //hàm giơi hạn chuỗi -->
<?php
function mysubstr($str,$limit=100){
	if(strlen($str)<=$limit) return $str;
	return mb_substr($str,0,$limit-3,'UTF-8').'...';
}
?>
<div class="row mt-4 mb-4">
    <?php
        $rv=new reviewsach();
        $r=$rv->getAll();
        while($set=$r->fetch()):
    ?>
    <div class="col-3">
        <a href="index.php?controller=reviewsach&action=review_action&id=<?php echo $set['id']?>">
         <div class="card">
             <div class="views-field-taxonomy-vocabulary-2">REVIEW</div>
            <img class="card-img-top" src="./content/IMG PHP/reviewsach/<?php echo $set['hinh']?>" alt="Card image cap">
            <div class="card-body">
            <h3 class="card-title nav-link"><?php echo $set['title']?></h3>
            <p class="card-text"><?php echo mysubstr($set['noidung'],70)?></>
            <p class="card-text"><small class="text-muted">Đăng Bởi : <?php echo $set['nguoidang']?></small></p>
            </div>
         </div>
        </a>
            
    </div>
    <?php endwhile;?>
</div>