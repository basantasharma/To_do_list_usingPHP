<nav>
    <div class="left"> <a href="#">Logo</a></div>
    <div class="center"><input type="text" placeholder="Search"></div>
    <?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
if(isset($_SESSION['email'])){
    echo "<div style='display: flex;'>";
    echo "<a href='/todo.php'>Add Todo</a>";
    echo "<a href='/logout.php'>logout</a>";
    echo "</div>";
}
else{
    echo "<div style='display: flex;'>";
    echo "<a href='/login.php'>login</a><br>";
    echo "<a href='/register.php'>register</a>";
    echo "</div>";
}

?>
    <!-- <div class="right"><a href="#" onclick="showform()">Log in</a></div> -->
    <!-- <div class="right"><a class="btn" href="login.html">Log in</a></div> -->
</nav>