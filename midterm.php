<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  echo"<H1><center>ตารางรายงานสถานการโควิด-19 แยกจังหวัด</center></H1>";
  echo "<br><br>";
  echo "<body style='background-color:#40E0D0'>";

  echo "<center><table border='1'>";
  echo "<tr align = 'center'>";

  echo "<td bgcolor='#66FFCC'>"; 
  echo "<b>ลำดับ</b>";
  echo "</td>"; 

  echo "<td bgcolor='#66CCFF'.valign='middle'>"; 
  echo "<b>จังหวัด</b>";
  echo "</td>";

  echo "<td bgcolor='#FFD700'>"; 
  echo "<b>ผู้ป่วยใหม่</b>";
  echo "</td>";

  echo "<td bgcolor='#00FF7F'>"; 
  echo "<b>ผู้ป่วยรวม</b>";
  echo "</td>";

  echo "<td bgcolor='#FF66CC'>"; 
  echo "<b>ผู้ป่วยใหม่ในประเทศ</b>";
  echo "</td>";
  echo "<td bgcolor='#CC99FF'>"; 
  echo "<b>ผู้ป่วยรวมในประเทศ</b>";
  echo "</td>";
  echo "<td bgcolor='#FF3333'>"; 
  echo "<b>ผู้เสียชีวิตใหม่</b>";
  echo "</td>";
  echo "<td bgcolor='#DCDCDC'>"; 
  echo "<b>ผู้เสียชีวิตรวม</b>";
  echo "</td>";
  echo "<td bgcolor='#F0FFFF'>"; 
  echo "<b>วันที่อัพเดต</b>";
  echo "</td>";

  
  echo "</tr>";
  foreach($data as $key=>$val){
    echo "<tr align = 'center'>";
    echo "<td bgcolor='#66FFCC'>"; 
    echo $key+1;
    echo "</td>"; 
    echo "<td bgcolor='#66CCFF'>"; 
    echo $val->province;
    echo "</td>"; 
    echo "<td bgcolor='#FFD700'>"; 
    echo $val->new_case;
    echo "</td>";
    echo "<td bgcolor='#00FF7F'>"; 
    echo $val->total_case;
    echo "</td>";
    echo "<td bgcolor='#FF66CC'>"; 
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#CC99FF'>"; 
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#FF3333'>"; 
    echo $val-> new_death;
    echo "</td>";
    echo "<td bgcolor='#DCDCDC'>"; 
    echo $val-> total_death;
    echo "</td>";
    echo "<td bgcolor='#F0FFFF'>"; 
    echo $val-> txn_date;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo"</center>";
?>
