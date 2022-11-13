<?php 
  $p=new Page();
  $limit=20;
  $start=$p->findStart($limit);
  $s=new Sach();
  $result=$s->getBooks();
  $count=$result->rowCount();
// tinh xem so row
  $page=$p->findPage($count,$limit);
  // echo '<script type="text/javascript"> alert('.$start.')</script>';

  $currentPage=isset($_GET['page'])?$_GET['page'] :1;

  ?>
<table class="table table-hover bg-light">
  <thead>
    <tr>
      <th scope="col">Mã Sách</th>
      <th scope="col">Hình</th>
      <th scope="col">Tên Sách</th>
      <th scope="col">Ngày Xuất Bản</th>
      <th scope="col">Giá</th>
      <th scope="col">Số Trang</th>
      <th scope="col">So Lượng tồn</th>
      <th scope="col">Mã Tác Giả</th>
      <th scope="col">Mã Thể Loại</th>
      <th scope="col">Mã Nhà Xuất Bản</th>
      <th scope="col">Cập Nhật</th>
    <th scope="col" >Xóa</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        $r=$s->getBooksLimit($start,$limit);
        while ($set=$r->fetch()):
          $tentg=$s->getTacGia($set['masach']);
          $tentl=$s->getTheLoai($set['masach']);
          $tennxb=$s->getNXB($set['masach']);
      ?>
    <tr>
      <th scope="row"><?php echo $set['masach']?></th>
      <td><img src="./asset/IMG PHP/<?php echo $set['hinh']?>" alt=" width="50px" height="50px"></td>
      <td><?php echo $set['tensach']?></td>
      <td><?php echo $set['namxuatban']?></td>
      <td><?php echo $set['gia']?></td>
      <td><?php echo $set['sotrang']?></td>
      <td><?php echo $set['soluong']?></td>
      <td><?php echo $tentg[0]?></td>
      <td><?php echo $tentl[0]?></td>
      <td><?php echo $tennxb[0]?></td>
      <td><a href="index.php?controller=home&action=updatesach&id=<?php echo $set['masach']?>" class="btn btn-primary">Cập nhật</a></td>
      <td><a href="index.php?controller=home&action=xoasach&id=<?php echo $set['masach']?>" class="btn btn-primary">Xóa</a></td>
    </tr>
   <?php endwhile;?>
  </tbody>
</table>

  <nav aria-label="Page navigation example">
  <ul class="pagination">
     <?php
                        if($currentPage > 1 && $page >1){
                            echo '<li class="page-item"> <a class="page-link" href="index.php?&page='.($currentPage-1).'">Prev</a> </li>';
                            
                        }
                        for($i=1;$i<=$page;$i++){
                        ?>
                        <li class="page-item"> <a class="page-link" href="index.php?&page=<?php echo $i;?>"><?php echo $i;?></a> </li>
                        <?php 
                        }
                        if($currentPage < $page && $page >1){
                            echo '<li class="page-item"> <a class="page-link" href="index.php?&page='.($currentPage+1).'">Next</a> </li>';
                        }
                        ?>
  </ul>
</nav>