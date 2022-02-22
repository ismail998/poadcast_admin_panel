<?php 
$sql_Book="SELECT * FROM book";
$resulte1 =mysqli_query($conn,$sql_Book);
$books=mysqli_fetch_all($resulte1,MYSQLI_ASSOC);
?>
<?php 

foreach ($books as $book) {
   echo '<tr>
   <th scope="row">'.$book['id_book'].'</th>
   <td>'.$book['name'].'</td>
   <td><img src="'.$book['img'].'" alt="image" width="80" height="80"></td>
   <td>'.$book['writer'].'</td>
   <td><a href="'.$book['pdf'].'">Link</a>
   <td><a href="'.$book['audio'].'">Link</a>
   </td>
   <td><a class="btn btn-primary" href="UpdateBook.php?id='. $book['id_book'].'" role="button">EDIT</a></td>
   <td><a class="btn btn-primary" href="dachboard.php?delete='. $book['id_book'].'"role="button">delete</a></td>
 </tr>';
}
echo '</tbody>
</table>';
?>