<header>
    <nav>
        <ul>
            <li><a href="animal-list.php">SeznamChovanychZvirat</a></li>
            <?php
            session_start();
            if (isset($_SESSION['username'])) {?>
                <li><a href="SeznamChovanych.php"></a></li>
                <li>Welcome, <?php echo $_SESSION['username']; ?></li>
                <li><a href="SeznamZvirat.php">SeznamZvirat</a></li>
                <?php
            } else {
                ?>
                <li><a href="index.php">login</a></li>
                <?php
            }
            ?>
            
        </ul>
    </nav>
</header>
