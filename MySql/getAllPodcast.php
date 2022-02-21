<?php 
$sql_podcast="SELECT * FROM podcast";
$resulte =mysqli_query($conn,$sql_podcast);
$data_book=mysqli_fetch_all($resulte,MYSQLI_ASSOC);
?>
<?php 

foreach ($data_book as $book) {
   echo '<tr>
   <th scope="row">'.$book['id_podcast'].'</th>
   <td>'.$book['name'].'</td>
   <td><img src="'.$book['url_img'].'" alt="image" width="80" height="80"></td>
   <td>'.$book['speaker'].'</td>
   <td><a href="'.$book['url_podcast'].'">Link</a>
   </td>
   <td><a class="btn btn-primary" href="UpdatePdcast.php?id='. $book['id_podcast'].'" role="button">EDIT</a></td>
   <td><a class="btn btn-primary" href="dachboard.php?delete='. $book['id_podcast'].'"role="button">delete</a></td>
 </tr>';
}
echo '</tbody>
</table>';
?>
      