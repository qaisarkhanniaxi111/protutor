@extends('layouts.site')

@section('content')
    <div class="hero-container">
        <section class="lesson-btns">
            <div class="btns-box">
                <button class="private-lesson"><a href="">Private Lesson</a></button>
                <button class="group-classes"><a href="#">Group Classes</a></button>
            </div>
            <h1 class="text-online">Online English classes to practice speaking together</h1>
            <p class="tagline">Learn, speak and connect with a small group of students, guided by an expert tutor</p>
        </section>
    </div>
    <div class="search-container">
        <div class="search-menu">
            <div class="search-items">
                <ul>
                    <li class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">
                            <img class="icon-btn" alt="Svg xml" src="./images/english-level.svg" />English level
                            <img class="icon-btn" alt="Svg xml" src="../images/vector.svg" />
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                            <a href="#about">About</a>
                            <a href="#base">Base</a>
                            <a href="#blog">Blog</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">
                            <img class="icon-btn" alt="Svg xml" src="./images/topic.svg" />Topic
                            <img class="icon-btn" alt="Svg xml" src="../images/vector.svg" />
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                            <a href="#about">About</a>
                            <a href="#base">Base</a>
                            <a href="#blog">Blog</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">
                            <img class="icon-btn" alt="Svg xml" src="./images/days.svg" />Day
                            <img class="icon-btn" alt="Svg xml" src="../images/vector.svg" />
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                            <a href="#about">About</a>
                            <a href="#base">Base</a>
                            <a href="#blog">Blog</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">
                            <img class="icon-btn" alt="Svg xml" src="./images/english-level.svg" />Time
                            <img class="icon-btn" alt="Svg xml" src="../images/vector.svg" />
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                            <a href="#about">About</a>
                            <a href="#base">Base</a>
                            <a href="#blog">Blog</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">
                            <img class="icon-btn" alt="Svg xml" src="./images/price.svg" />Price
                            <img class="icon-btn" alt="Svg xml" src="../images/vector.svg" />
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                            <a href="#about">About</a>
                            <a href="#base">Base</a>
                            <a href="#blog">Blog</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">
                            <img class="icon-btn" alt="Svg xml" src="./images/format.svg" />Format
                            <img class="icon-btn" alt="Svg xml" src="../images/vector.svg" />
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                            <a href="#about">About</a>
                            <a href="#base">Base</a>
                            <a href="#blog">Blog</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">
                            <img class="icon-btn" alt="Svg xml" src="./images/Sortby.svg" />Sort by
                            <img class="icon-btn" alt="Svg xml" src="../images/vector.svg" />
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                            <a href="#about">About</a>
                            <a href="#base">Base</a>
                            <a href="#blog">Blog</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- slider 1-->
    <section id="card-section">
        <div class="text-container">
            <h2 class="starting-today">Starting today</h2>
        </div>
        <div class="card-container">
            <!-- slick_slider will be used here -->
            <div class="cards-collection ">
                <div class="card-wrapper ">
                    <div class="slider-card ">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="{{ asset('assets/frontpage_assets/images/Ellipse_2670.svg') }}" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                </button>
                                <div class="top-reviews">
                                    <div class="reviews-box">
                                        <img class="review-2" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2669.svg" />
                                        <img class="review-3" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2671.svg" />
                                        <img class="review-4" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2672.svg" />
                                        <img class="review-5" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2673.svg" />
                                        <div class="review-text">
                                            <span>+120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- slider 2-->
    <section id="card-section">
        <div class="text-container">
            <h2 class="starting-today">Build confidence for work conversations</h2>
        </div>
        <div class="card-container">
            <div class="cards-collection">
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                </button>
                                <div class="top-reviews">
                                    <div class="reviews-box">
                                        <img class="review-2" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2669.svg" />
                                        <img class="review-3" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2671.svg" />
                                        <img class="review-4" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2672.svg" />
                                        <img class="review-5" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2673.svg" />
                                        <div class="review-text">
                                            <span>+120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                </button>
                                <div class="top-reviews">
                                    <div class="reviews-box">
                                        <img class="review-2" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2669.svg" />
                                        <img class="review-3" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2671.svg" />
                                        <img class="review-4" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2672.svg" />
                                        <img class="review-5" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2673.svg" />
                                        <div class="review-text">
                                            <span>+120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                </button>
                                <div class="top-reviews">
                                    <div class="reviews-box">
                                        <img class="review-2" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2669.svg" />
                                        <img class="review-3" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2671.svg" />
                                        <img class="review-4" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2672.svg" />
                                        <img class="review-5" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2673.svg" />
                                        <div class="review-text">
                                            <span>+120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- slider 3-->
    <section id="card-section">
        <div class="text-container">
            <h2 class="starting-today">Boost your conversations skills wiht speacking clubs</h2>
        </div>
        <div class="card-container">
            <div class="cards-collection">
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- slider 4-->
    <section id="card-section">
        <div class="text-container">
            <h2 class="starting-today">Score your best on English exams</h2>
        </div>
        <div class="card-container">
            <div class="cards-collection">
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- slider 5-->
    <section id="card-section">
        <div class="text-container">
            <h2 class="starting-today group-classText">All group Classes</h2>
        </div>
        <div class="card-container">
            <div class="cards-collection">
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image" src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image"
                            src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image"
                            src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="slider-card">
                        <img class="card-image" alt="Image"
                            src="./images/startingCardmages/Rectangle 4436 (1).png" />
                        <div class="b2-c2">
                            <div class="b2c2text-wrapper">B2-C2</div>
                            <div class="vl"></div>
                            <div class="likely-tosell">Likely to sell out</div>
                        </div>
                        <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                        <div class="profile">
                            <div class="person-data">
                                <div class="person">
                                    <img class="-person-image" alt="Image"
                                        src="./images/startingCardmages/Ellipse 2670.svg" />
                                    <div class="text-wrapper-4">Jordyn Ekst</div>
                                </div>
                                <div class="vl"></div>
                                <div class="reviews">
                                    <div class="icon">
                                        <img class="star" alt="Star" src="./images/startingCardmages/Ico.svg" />
                                    </div>
                                    <div class="rating">
                                        <span class="span-text">4.9 (220)</span>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%" color="#e3e3e3" />
                            <div class="price-panal">
                                <button class="price-box">
                                    <div class="price-wrapper">
                                        <div class="price-elements">
                                            <a href="#">
                                                <span class="span-priceText">$5.00 </span>
                                                <span class="span-classtext">/ Class</span>
                                            </a>
                                        </div>
                                    </div>
                                    <button />
                                    <div class="top-reviews">
                                        <div class="reviews-box">
                                            <img class="review-2" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2669.svg" />
                                            <img class="review-3" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2671.svg" />
                                            <img class="review-4" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2672.svg" />
                                            <img class="review-5" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2673.svg" />
                                            <div class="review-text">
                                                <span>+120</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2nd card continner -->
            <div class="card-container">
                <div class="cards-collection">
                    <div class="card-wrapper">
                        <div class="slider-card">
                            <img class="card-image" alt="Image"
                                src="./images/startingCardmages/Rectangle 4436 (1).png" />
                            <div class="b2-c2">
                                <div class="b2c2text-wrapper">B2-C2</div>
                                <div class="vl"></div>
                                <div class="likely-tosell">Likely to sell out</div>
                            </div>
                            <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                            <div class="profile">
                                <div class="person-data">
                                    <div class="person">
                                        <img class="-person-image" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2670.svg" />
                                        <div class="text-wrapper-4">Jordyn Ekst</div>
                                    </div>
                                    <div class="vl"></div>
                                    <div class="reviews">
                                        <div class="icon">
                                            <img class="star" alt="Star"
                                                src="./images/startingCardmages/Ico.svg" />
                                        </div>
                                        <div class="rating">
                                            <span class="span-text">4.9 (220)</span>
                                        </div>
                                    </div>
                                </div>
                                <hr width="100%" color="#e3e3e3" />
                                <div class="price-panal">
                                    <button class="price-box">
                                        <div class="price-wrapper">
                                            <div class="price-elements">
                                                <a href="#">
                                                    <span class="span-priceText">$5.00 </span>
                                                    <span class="span-classtext">/ Class</span>
                                                </a>
                                            </div>
                                        </div>
                                        <button />
                                        <div class="top-reviews">
                                            <div class="reviews-box">
                                                <img class="review-2" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2669.svg" />
                                                <img class="review-3" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2671.svg" />
                                                <img class="review-4" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2672.svg" />
                                                <img class="review-5" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2673.svg" />
                                                <div class="review-text">
                                                    <span>+120</span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="slider-card">
                            <img class="card-image" alt="Image"
                                src="./images/startingCardmages/Rectangle 4436 (1).png" />
                            <div class="b2-c2">
                                <div class="b2c2text-wrapper">B2-C2</div>
                                <div class="vl"></div>
                                <div class="likely-tosell">Likely to sell out</div>
                            </div>
                            <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                            <div class="profile">
                                <div class="person-data">
                                    <div class="person">
                                        <img class="-person-image" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2670.svg" />
                                        <div class="text-wrapper-4">Jordyn Ekst</div>
                                    </div>
                                    <div class="vl"></div>
                                    <div class="reviews">
                                        <div class="icon">
                                            <img class="star" alt="Star"
                                                src="./images/startingCardmages/Ico.svg" />
                                        </div>
                                        <div class="rating">
                                            <span class="span-text">4.9 (220)</span>
                                        </div>
                                    </div>
                                </div>
                                <hr width="100%" color="#e3e3e3" />
                                <div class="price-panal">
                                    <button class="price-box">
                                        <div class="price-wrapper">
                                            <div class="price-elements">
                                                <a href="#">
                                                    <span class="span-priceText">$5.00 </span>
                                                    <span class="span-classtext">/ Class</span>
                                                </a>
                                            </div>
                                        </div>
                                        <button />
                                        <div class="top-reviews">
                                            <div class="reviews-box">
                                                <img class="review-2" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2669.svg" />
                                                <img class="review-3" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2671.svg" />
                                                <img class="review-4" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2672.svg" />
                                                <img class="review-5" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2673.svg" />
                                                <div class="review-text">
                                                    <span>+120</span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="slider-card">
                            <img class="card-image" alt="Image"
                                src="./images/startingCardmages/Rectangle 4436 (1).png" />
                            <div class="b2-c2">
                                <div class="b2c2text-wrapper">B2-C2</div>
                                <div class="vl"></div>
                                <div class="likely-tosell">Likely to sell out</div>
                            </div>
                            <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                            <div class="profile">
                                <div class="person-data">
                                    <div class="person">
                                        <img class="-person-image" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2670.svg" />
                                        <div class="text-wrapper-4">Jordyn Ekst</div>
                                    </div>
                                    <div class="vl"></div>
                                    <div class="reviews">
                                        <div class="icon">
                                            <img class="star" alt="Star"
                                                src="./images/startingCardmages/Ico.svg" />
                                        </div>
                                        <div class="rating">
                                            <span class="span-text">4.9 (220)</span>
                                        </div>
                                    </div>
                                </div>
                                <hr width="100%" color="#e3e3e3" />
                                <div class="price-panal">
                                    <button class="price-box">
                                        <div class="price-wrapper">
                                            <div class="price-elements">
                                                <a href="#">
                                                    <span class="span-priceText">$5.00 </span>
                                                    <span class="span-classtext">/ Class</span>
                                                </a>
                                            </div>
                                        </div>
                                        <button />
                                        <div class="top-reviews">
                                            <div class="reviews-box">
                                                <img class="review-2" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2669.svg" />
                                                <img class="review-3" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2671.svg" />
                                                <img class="review-4" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2672.svg" />
                                                <img class="review-5" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2673.svg" />
                                                <div class="review-text">
                                                    <span>+120</span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper">
                        <div class="slider-card">
                            <img class="card-image" alt="Image"
                                src="./images/startingCardmages/Rectangle 4436 (1).png" />
                            <div class="b2-c2">
                                <div class="b2c2text-wrapper">B2-C2</div>
                                <div class="vl"></div>
                                <div class="likely-tosell">Likely to sell out</div>
                            </div>
                            <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                            <div class="profile">
                                <div class="person-data">
                                    <div class="person">
                                        <img class="-person-image" alt="Image"
                                            src="./images/startingCardmages/Ellipse 2670.svg" />
                                        <div class="text-wrapper-4">Jordyn Ekst</div>
                                    </div>
                                    <div class="vl"></div>
                                    <div class="reviews">
                                        <div class="icon">
                                            <img class="star" alt="Star"
                                                src="./images/startingCardmages/Ico.svg" />
                                        </div>
                                        <div class="rating">
                                            <span class="span-text">4.9 (220)</span>
                                        </div>
                                    </div>
                                </div>
                                <hr width="100%" color="#e3e3e3" />
                                <div class="price-panal">
                                    <button class="price-box">
                                        <div class="price-wrapper">
                                            <div class="price-elements">
                                                <a href="#">
                                                    <span class="span-priceText">$5.00 </span>
                                                    <span class="span-classtext">/ Class</span>
                                                </a>
                                            </div>
                                        </div>
                                        <button />
                                        <div class="top-reviews">
                                            <div class="reviews-box">
                                                <img class="review-2" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2669.svg" />
                                                <img class="review-3" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2671.svg" />
                                                <img class="review-4" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2672.svg" />
                                                <img class="review-5" alt="Image"
                                                    src="./images/startingCardmages/Ellipse 2673.svg" />
                                                <div class="review-text">
                                                    <span>+120</span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3rd card continner -->
                <div class="card-container">
                    <div class="cards-collection">
                        <div class="card-wrapper">
                            <div class="slider-card">
                                <img class="card-image" alt="Image"
                                    src="./images/startingCardmages/Rectangle 4436 (1).png" />
                                <div class="b2-c2">
                                    <div class="b2c2text-wrapper">B2-C2</div>
                                    <div class="vl"></div>
                                    <div class="likely-tosell">Likely to sell out</div>
                                </div>
                                <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                                <div class="profile">
                                    <div class="person-data">
                                        <div class="person">
                                            <img class="-person-image" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2670.svg" />
                                            <div class="text-wrapper-4">Jordyn Ekst</div>
                                        </div>
                                        <div class="vl"></div>
                                        <div class="reviews">
                                            <div class="icon">
                                                <img class="star" alt="Star"
                                                    src="./images/startingCardmages/Ico.svg" />
                                            </div>
                                            <div class="rating">
                                                <span class="span-text">4.9 (220)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr width="100%" color="#e3e3e3" />
                                    <div class="price-panal">
                                        <button class="price-box">
                                            <div class="price-wrapper">
                                                <div class="price-elements">
                                                    <a href="#">
                                                        <span class="span-priceText">$5.00 </span>
                                                        <span class="span-classtext">/ Class</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <button />
                                            <div class="top-reviews">
                                                <div class="reviews-box">
                                                    <img class="review-2" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2669.svg" />
                                                    <img class="review-3" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2671.svg" />
                                                    <img class="review-4" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2672.svg" />
                                                    <img class="review-5" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2673.svg" />
                                                    <div class="review-text">
                                                        <span>+120</span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrapper">
                            <div class="slider-card">
                                <img class="card-image" alt="Image"
                                    src="./images/startingCardmages/Rectangle 4436 (1).png" />
                                <div class="b2-c2">
                                    <div class="b2c2text-wrapper">B2-C2</div>
                                    <div class="vl"></div>
                                    <div class="likely-tosell">Likely to sell out</div>
                                </div>
                                <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                                <div class="profile">
                                    <div class="person-data">
                                        <div class="person">
                                            <img class="-person-image" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2670.svg" />
                                            <div class="text-wrapper-4">Jordyn Ekst</div>
                                        </div>
                                        <div class="vl"></div>
                                        <div class="reviews">
                                            <div class="icon">
                                                <img class="star" alt="Star"
                                                    src="./images/startingCardmages/Ico.svg" />
                                            </div>
                                            <div class="rating">
                                                <span class="span-text">4.9 (220)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr width="100%" color="#e3e3e3" />
                                    <div class="price-panal">
                                        <button class="price-box">
                                            <div class="price-wrapper">
                                                <div class="price-elements">
                                                    <a href="#">
                                                        <span class="span-priceText">$5.00 </span>
                                                        <span class="span-classtext">/ Class</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <button />
                                            <div class="top-reviews">
                                                <div class="reviews-box">
                                                    <img class="review-2" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2669.svg" />
                                                    <img class="review-3" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2671.svg" />
                                                    <img class="review-4" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2672.svg" />
                                                    <img class="review-5" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2673.svg" />
                                                    <div class="review-text">
                                                        <span>+120</span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrapper">
                            <div class="slider-card">
                                <img class="card-image" alt="Image"
                                    src="./images/startingCardmages/Rectangle 4436 (1).png" />
                                <div class="b2-c2">
                                    <div class="b2c2text-wrapper">B2-C2</div>
                                    <div class="vl"></div>
                                    <div class="likely-tosell">Likely to sell out</div>
                                </div>
                                <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                                <div class="profile">
                                    <div class="person-data">
                                        <div class="person">
                                            <img class="-person-image" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2670.svg" />
                                            <div class="text-wrapper-4">Jordyn Ekst</div>
                                        </div>
                                        <div class="vl"></div>
                                        <div class="reviews">
                                            <div class="icon">
                                                <img class="star" alt="Star"
                                                    src="./images/startingCardmages/Ico.svg" />
                                            </div>
                                            <div class="rating">
                                                <span class="span-text">4.9 (220)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr width="100%" color="#e3e3e3" />
                                    <div class="price-panal">
                                        <button class="price-box">
                                            <div class="price-wrapper">
                                                <div class="price-elements">
                                                    <a href="#">
                                                        <span class="span-priceText">$5.00 </span>
                                                        <span class="span-classtext">/ Class</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <button />
                                            <div class="top-reviews">
                                                <div class="reviews-box">
                                                    <img class="review-2" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2669.svg" />
                                                    <img class="review-3" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2671.svg" />
                                                    <img class="review-4" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2672.svg" />
                                                    <img class="review-5" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2673.svg" />
                                                    <div class="review-text">
                                                        <span>+120</span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrapper">
                            <div class="slider-card">
                                <img class="card-image" alt="Image"
                                    src="./images/startingCardmages/Rectangle 4436 (1).png" />
                                <div class="b2-c2">
                                    <div class="b2c2text-wrapper">B2-C2</div>
                                    <div class="vl"></div>
                                    <div class="likely-tosell">Likely to sell out</div>
                                </div>
                                <p class="paragraph">Let's Socialize in English! Explore Health, Welln...</p>
                                <div class="profile">
                                    <div class="person-data">
                                        <div class="person">
                                            <img class="-person-image" alt="Image"
                                                src="./images/startingCardmages/Ellipse 2670.svg" />
                                            <div class="text-wrapper-4">Jordyn Ekst</div>
                                        </div>
                                        <div class="vl"></div>
                                        <div class="reviews">
                                            <div class="icon">
                                                <img class="star" alt="Star"
                                                    src="./images/startingCardmages/Ico.svg" />
                                            </div>
                                            <div class="rating">
                                                <span class="span-text">4.9 (220)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr width="100%" color="#e3e3e3" />
                                    <div class="price-panal">
                                        <button class="price-box">
                                            <div class="price-wrapper">
                                                <div class="price-elements">
                                                    <a href="#">
                                                        <span class="span-priceText">$5.00 </span>
                                                        <span class="span-classtext">/ Class</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <button />
                                            <div class="top-reviews">
                                                <div class="reviews-box">
                                                    <img class="review-2" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2669.svg" />
                                                    <img class="review-3" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2671.svg" />
                                                    <img class="review-4" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2672.svg" />
                                                    <img class="review-5" alt="Image"
                                                        src="./images/startingCardmages/Ellipse 2673.svg" />
                                                    <div class="review-text">
                                                        <span>+120</span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <!-- testimonial Section -->
    <section class="test-card">
        <div class="container-testimonial">
            <section class="section-testimonial">
                <div class="text-testimonial">
                    <h2>Student Testimonials</h2>
                    <div class="double-cols">
                        <q>In my experience all the teachers are very supportive and friendly and the placement process has
                            been
                            very
                            smooth. it’s
                            also no issue talk about whatever you want to.</q>
                        <h6 class="name">Sherina Munir - Designer</h6>
                    </div>
                </div>
                <div class="testimonial-image">
                    <img src="./images/Testimonials.png" alt="Person Image">
                </div>
            </section>
        </div>
    </section>

    <!-- Corporate language training for business -->
    <section class="test-card">
        <div class="corporate-language">
            <section class="section-carporate">
                <div class="corporate-image">
                    <img src="{{ asset('assets/frontpage_assets/images/Corporate-language.png') }}" alt="Person Image">
                </div>
                <div class="text-corporate">
                    <h2>Corporate language training for business</h2>
                    <div class="double-cols">
                        <p class="name">ProTutor corporate training is designed for teams and businesses offering
                            personalized
                            language learning
                            with online
                            tutors. Book a demo to learn more.
                            Want your employer to pay for your lessons? Refer your company!</p>
                        <div class="join-as">
                            <button class="tutor"><a href="#"></a>Join as a Tutor</button>
                            <button class="student"><a href="#"></a>Join as a Student</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
