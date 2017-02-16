<ul class="nav nav-pills nav-stacked">
    <li role="presentation" class=""><a href="news_view.php">News View</a></li>
    <li role="presentation" class=""><a href="newses.php">Add News</a></li>
    <?php if($_SESSION['user_type']==1):?>
    <li role="presentation" class=""><a href="user.php">User</a></li>
    <?php endif;?>
    <li role="presentation"><a href="lib/user.php?log=out">Logout</a></li>
</ul>