<?php
/**
 * Created by PhpStorm.
 * User: TG Tech
 * Date: 6/18/2019
 * Time: 11:18 PM
 */

 $connect = mysqli_connect("localhost", "root", "", "ajax");
 if(isset($_POST["query"]))
 {
      $output = '';
      $query = "SELECT * FROM tbl_country WHERE country_name LIKE '%".$_POST["query"]."%'";
      $result = mysqli_query($connect, $query);
      $output = '<ul class="list-unstyled">';
      if(mysqli_num_rows($result) > 0)
      {
           while($row = mysqli_fetch_array($result))
           {
                $output .= '<li>'.$row["country_name"].'</li>';
           }
      }
      else
      {
           $output .= '<li>Country Not Found</li>';
      }
      $output .= '</ul>';
      echo $output;
 }
 ?>