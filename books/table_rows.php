<tr>
    <td><?php echo ''.$row['BookID'].''; ?></td>
    <td><?php echo ''.$row['Name'].''; ?></td>
    <td><?php echo ''.$row['Summary'].''; ?></td>
    <td><?php echo ''.$row['Author'].''; ?></td>
    <td><?php echo ''.$row['Publisher'].''; ?></td>
    <td><?php echo ''.$row['Price'].''; ?></td>
    <td><form action="update_book_form.php" method="post">
        <input type="hidden" name="bookID" value=<?php echo ''.$row['BookID'].'';?> >
        <input type="submit" value="Update record">
        </form>
    </td>
    <td><form action="fetchbook.php" method="post">
        <input type="hidden" name="bookID" value=<?php echo ''.$row['BookID'].'';?> >
        <input type="submit" value="Delete record">
        </form>
    </td>
</tr>