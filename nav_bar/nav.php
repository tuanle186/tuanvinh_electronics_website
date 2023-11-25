<header>
    <nav class="navbar navbar-expand navbar-light bg-warning">
        <div class="container w-75">
            <a class="navbar-brand align-self-center" href="http://localhost/index.php">
                <img id="logo1" src="/media_source/logo.png" alt="CVAS Professional Audio"> 
            </a>

            <!-- <div class="container">                
                <form class="d-flex" action="search.php" method="get">
                    <input class="form-control me-3 rounded-2" type="text" placeholder="Tìm kiếm sản phẩm" name="q">
                    <button class="btn btn-dark rounded-2" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 20">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </div> -->
            <form class="search-container" action="search.php" method="get">
                <input type="text" class="search-box" id="searchBox" placeholder="Bạn muốn tìm gì?" name="q" oninput="searchProducts(this.value)">
                <div class="suggestions-container" id="suggestions"></div>
            </form>

            <div class="d-flex">
                <div class="d-flex ms-2 me-3 border border-black rounded-3">
                    <div class="d-flex">
                        <div class="p-2 align-item-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                            </svg>
                        </div>
                        <div class="d-flex flex-column p-1">
                            <div id="hotline" class="p-0">
                                Hotline
                            </div>
                            <div id="hotline" class="p-0">
                                0845398739
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex me-3 border border-black rounded-3 px-2">
                    <div class="d-flex">
                        <div class="p-2 align-item-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg>
                        </div>
                        <div id="cart" class="d-inline-flex flex-column p-1 align-self-center">
                            <div class="p-0">
                                <nobr>Giỏ hàng</nobr>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    if (!isset($_SESSION["level"])) {
                        include 'nav_guest.php';
                    } else {
                        include 'nav_logged.php';
                    }
                ?>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item mx-1">
                <a id="nav_categories" class="nav-link" href="http://localhost/index.php?page=home">Trang chính</a>
            </li>
            <li class="navbar-nav mx-1">
                <li class="nav-item">
                    <a id="nav_categories" class="nav-link" href="http://localhost/index.php?page=products">Sản phẩm</a>
                </li>
            </li>
            <li class="navbar-nav mx-1">
                <li class="nav-item">
                    <a id="nav_categories" class="nav-link" href="http://localhost/index.php?page=home">Liên hệ</a>
                </li>
            </li>
        </ul>
    </nav>
</header>