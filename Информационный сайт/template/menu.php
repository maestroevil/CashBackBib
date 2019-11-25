<!-- header -->
<?
    include "conf/array.php"
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-white main-content header-main-content">
        <a class="navbar-brand header-company-name" href="index.html">CosmoPay</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <?
                foreach ($menu_array as $key => $value) {
                    echo "<li class='nav-item'>
                        <a class='nav-link' href='$value'>$key</a>
                        </li>";
                }
            ?>
        </div>
    </nav>