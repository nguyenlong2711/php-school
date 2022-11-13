<meta charset="UTF-8">
<script type="text/javascript" src="https://google.com/jsapi"></script>
<script type="text/javascript" >
    google.load('visualization','1.0',{
        'packages':['corechart']
    });
    google.setOnLoadCallback(drawVisualization);
    function drawVisualization(){
        var datensach=0;
        var soluong=0;
        var rows=new Array();
        var data=new google.visualization.DataTable();

        var tensach=new Array();
        var soluongban=new Array();
        <?php
            $s=new Sach();
            $result=$s->getListThongKe_SL_MatHang();
            while($row=$result->fetch()) {
                $tensach=$row['tensach'];
                $soluongban=$row['soluongban'];
                echo "tensach.push('".$tensach."');";
                echo "soluongban.push('".$soluongban."');";
                
            }
        ?>
        for(var i=0;i<tensach.length;i++){
            datensach=tensach[i];
            soluong=parseInt(soluongban[i]);
            rows.push([datensach,soluong])
        }
        data.addColumn('string','Tên Sách');
        data.addColumn('number','So Luong');
        data.addRows(rows);
        var option={
            title:'Thống Kê Số Lượng Các Sách',
            'width':600,
            'height':400,
            'backgroundColor':'#00000'
        }
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data,option);
        

    }
    
</script>
<div id="chart_div"></div>