<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Truhlářství Rapaň - rapan.cz</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="David Rapaň">
    <meta name="keywords" content="truhlářství, truhlářské práce, stolařství, kuchyňské linky, schodiště, nábytek, dveře, na klíč, Rudolf, Ruda, Rapaň, Javorník, Jeseník">
    <meta name="description" content="Architektonická řešení a výroba kuchyňských linek, schodišť, veškerého nábytku, interiérových i venkovních dveří, interiérových doplňků (zakázková výroba).">
    <meta name="robots" content="all">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Truhlářství Rapaň - rapan.cz">
	<meta property="og:title" content="Truhlářství Rapaň - rapan.cz">
	<meta property="og:url" content="https://truhlarstvi.rapan.cz">
    <meta property="og:image" content="https://truhlarstvi.rapan.cz/styles/images/preview.jpg">
    <meta property="og:description" content="Architektonická řešení a výroba kuchyňských linek, schodišť, veškerého nábytku, interiérových i venkovních dveří, interiérových doplňků (zakázková výroba).">
    <link rel="shortcut icon" href="../../common/images/favicon.png">
	<link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/responsive.css">
</head>
<body>
    <article class="cover" id="cover">
        <div class="photo">
            <div class="photo_cover">
                <div class="text">
                    <p>&bdquo;Truhlářství představuje můj život, je můj styl...</p>
		    <p>...a především vášnivé poslání.&rdquo;</a>
                </div>
            </div>
        </div>
        <div class="color">
            <div class="text right">
		<p>každou zakázku pojí jedinečnost,
		<br>originalita díky úzké kooperaci s klienty,
		<br>aktuální trendy a styl</p>
		<p>vždy se snažím maximálně porozumět vkusu klientů
		<br>a tak vyhovět každému požadavku</p>
		<p>s radostí čelím výzvám,
		<br>nic není nemožné</p>
            </div>
        </div>
        <a href="https://truhlarstvi.rapan.cz" class="logo"><h1>truhlářství rapaň</h1></a>
        <a href="#aboutme" class="button"><div class="icon"></div></a>
    </article>
    <section>
        <article class="aboutme" id="aboutme">
            <div class="wrap">
                <div class="left">
                    <div class="screen"></div>
                </div>
                <div class="right">
                   <div class="text">
                        <p>Truhlářské výrobě se věnuji již 35 let. Používám přírodní i laminované materiály a nejnovější technologie. Zabývám se především výrobou na zakázku, tudíž je každý mnou vyrobený kus originálem.</p>
                        <p>Ke zpracování návrhů používám 3D grafiku. Konzultace a doprava je zcela zdarma a veškerá záruka na mé výrobky je 2 roky.</p>
                    </div>
                    <div class="arrow"></div>
                    <div class="name">
                        <h2>Rudolf Rapaň</h2>
                        <p>podnikatel, truhlář</p>
                    </div>
                </div>
                <div class="cf"></div>
            </div>
        </article>
        <article class="insert checkit">
            <div class="insert_wrap">
                <p>sleduji nejnovější trendy pro nadčasový vzhled</p>
                <p>kladu maximální důraz na praktičnost a hlavně kvalitu a preciznost provedení</p>
                <p>ostatně, přesvědčte se sami... :)</p>
            </div>
        </article>
        <article class="portfolio" id="portfolio">
            <div class="wrap">
                <h3>portfolio</h3>
                <div class="cf"></div>
            </div>
            <div class="overview">
<?php
    for ($i=1;$i<=10;$i++) { 
        echo "
        <a href=\"javascript:preview('".$i.".jpg')\" class=\"item\">
         <div class=\"img\" style=\"background-image: url(content/gallery_static/thumbnails/".$i.".jpg);\"><div class=\"hover\"><div class=\"cross\"></div></div></div>
        </a>";
    }
?>
            </div>
        </article>
        <article class="insert uwantit">
            <div class="insert_wrap">
                <p>tak, co říkáte?</p>
                <p>spolu jistě vytvoříme něco, na co můžeme být pyšní</p>
                <p>stačí se ozvat, nebo se za mnou můžete přijet podívat... ;)</p>
            </div>
        </article>
        <article class="contact" id="contact">
            <div class="wrap">
                <div class="left">
                    <div class="text desc">
                        <p class="contc">Tel.: <a href="tel:+420776646710">+420 776 646 710</a><br>E-mail: <a href="mailto:ruda@rapan.cz">ruda@rapan.cz</a></p>
                        <p class="name">Rudolf Rapaň</p>
                        <p>Míru 373<br>790 70, Javorník</p>
                        <p><i>IČ: 74353021</i></p>
                    </div>
                    <div class="cf"></div>
                    <div class="arrow"></div>
                    <div class="text gmaps"><a href="https://www.google.cz/maps/place/M%C3%ADru+373,+790+70+Javorn%C3%ADk/@50.3831054,16.9745896,17z/data=!3m1!4b1!4m5!3m4!1s0x4711e1a864c9ace7:0xdda96ce2551314ee!8m2!3d50.3831054!4d16.9767783" target="_blank"><div class="map"></div></a></div>
                </div>
                <div class="right">
                    <div class="text form">
                        <form method="POST">
                            <h4>Ozvěte se mi</h4>
                            <input class="name" name="name" placeholder="Celé jméno / Název společnosti" type="text">
                            <input class="email" name="email" placeholder="E-mail" type="text">
                            <input class="phone" name="phone" placeholder="Telefon [+420...]" type="text">
                            <div class="cf"></div>
                            <textarea name="comments" placeholder="Zpráva"></textarea>
                            <p class="submit"><input class="submit" type="submit" value="Odeslat"></p>
                        </form>
                    </div>
                </div>
                <div class="cf"></div>
                <footer><a href="https://codeisfun.cz">&copy; 2010 - 2023 codeisfun.cz - David Rapaň</a></footer>
            </div>
        </article>
    </section>
    <!--
    <nav>
        <ul>
            <li><a href="#cover"><span>cover</span></a></li>
            <li><a href="#aboutme"><span>o mně</span></a></li>
            <li><a href="#portfolio"><span>portfolio</span></a></li>
            <li><a href="#contact"><span>contact</span></a></li>
        </ul>
    </nav>
    -->
    <div class="gallery_preview v_center hide">
        <div class="preview v_centered"><div class="preview_hide"><div class="icon"></div></div><div class="display"><canvas style="width:500px;height:500px"></div></div>
    </div>
    <div class="page_load loading"></div>
</body>
<script src="https://unpkg.com/gpu.js@latest/dist/gpu-browser.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" crossorigin="anonymous"></script>
<script src="scripts/library.js"></script> 
<script src="scripts/main.js"></script>  
<script src="scripts/contact_form.js"></script> 
</html>