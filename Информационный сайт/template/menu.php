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
            <!-- </ul>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Мобильный кошелёк</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mobile-terminal.html">Мобильный терминал</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Сотрудничество</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Команда</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Поддержка проекта</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.html">Контакты</a>
                </li>
            </ul> -->
        </div>
    </nav>