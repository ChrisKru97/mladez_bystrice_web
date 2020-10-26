<!DOCTYPE html>
<html>
<title>Mládež Bystřice</title>
<meta charset="UTF-8">
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Acme">
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Pacifico">
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Varela+Round">
<style>
    .menu {
        margin-left: 25pt;
        display: flex;
        place-items: center;
        justify-content: space-around;
        width: 100%;
        max-width: 800pt;
    }

    body {
        font-family: Varela Round, sans-serif;
        margin: 0;
        background-image: linear-gradient(90deg, #dcffa9, #a9e7ff);
    }

    header {
        top: 0;
        z-index: 1;
        padding: 0 30pt;
        position: sticky;
        background-color: rgba(0, 0, 0, 0.6);
        height: 8vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    button, header a {
        padding: 1px 6px;
        text-align: center;
        font-family: Acme, sans-serif;
        text-decoration: none;
        background-color: transparent;
        border: none;
        color: white;
        font-size: 18pt;
        cursor: pointer;
    }

    header img {
        height: 5vh;
    }

    button:focus {
        outline: none;
    }

    .image-wrapper {
        margin: -8vh auto 0;
        position: relative;
        width: 100%;
    }

    .general-image {
        max-height: 100vh;
        width: 100%;
        object-fit: contain;
    }

    .image-overlay {
        position: absolute;
    }

    .image-overlay.title {
        left: 5%;
        top: 85%;
        font-weight: bold;
        font-size: 30pt;
    }

    .image-overlay.verse {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        margin-right: 20pt;
        text-align: center;
        left: 30%;
        top: 75%;
        font-size: 20pt;
    }

    .image-overlay div:last-child {
        margin-right: 20pt;
        margin-top: 10pt;
    }

    .content-wrapper {
        min-height: 100vh;
    }

    h1 {
        text-align: center;
    }

    .content-wrapper p, .map-container {
        padding: 0 25pt;
    }

    iframe {
        box-shadow: 3pt 3pt 4pt 1pt rgba(0, 0, 0, 0.15);
        border-radius: 10pt;
    }

    .selected-title {
        color: white;
        font-size: 40pt;
        text-shadow: 3pt 3pt 5pt rgba(0, 0, 0, 0.5);
    }

    .selected-button {
        color: deepskyblue;
        font-size: 20pt;
        text-decoration: underline;
    }

    .rounded-image {
        border-bottom-left-radius: 15pt;
        border-bottom-right-radius: 15pt;
        box-shadow: 3pt 3pt 4pt 1pt rgba(0, 0, 0, 0.15);
    }

    p {
        font-size: 13pt;
    }

    .slideshow-container {
        width: fit-content;
        margin: 0 auto;
        position: relative;
    }

    .slideshow-container img {
        object-fit: contain;
        max-height: 80vh;
        max-width: 100%;
        margin: 0 auto;
        border-radius: 15pt;
        box-shadow: 3pt 3pt 4pt 1pt rgba(0, 0, 0, 0.15);
        display: none;
    }

    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }

    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -24.5pt;
        padding: 12pt;
        color: white;
        font-weight: bold;
        font-size: 25pt;
        text-shadow: 0 0 7pt rgba(0, 0, 0, 1);
        transition: 0.6s ease;
        border-radius: 0 5pt 5pt 0;
        user-select: none;
    }

    .next {
        right: 0;
        border-radius: 5pt 0 0 5pt;
    }

    .prev:hover, .next:hover {
        background-color: rgba(0, 0, 0, 0.6);
    }

    .slideshow-padding {
        padding: 0 15pt;
    }

    @media only screen and (max-width: 992px) {
        button, header a {
            font-size: 3vw;
        }

        .selected-button {
            font-size: 3.5vw;
        }

        .image-overlay.title {
            font-size: 5vw;
        }

        .image-overlay.verse {
            font-size: 3vw;
        }
    }
</style>
<body>
<header>
    <img src="assets/logo.png" alt="logo"/>
    <div class="menu">
        <button onclick="focusPart('who')()" name="who">
            Kdo jsme?
        </button>
        <button onclick="focusPart('where')()" name="where">
            Kde se scházíme?
        </button>
        <button onclick="focusPart('when')()" name="when">
            Kdy se scházíme?
        </button>
        <button onclick="focusPart('contact')()" name="contact">
            Kontakt
        </button>
        <a href="/old">Starý web</a>
    </div>
</header>
<div class="content-wrapper">
    <div class="image-wrapper">
        <span class="image-overlay title" style="font-family: Pacifico">Mládež Bystřice</span>
        <div class="image-overlay verse">
            <div>"Buďte bdělí, stůjte pevně ve víře, buďte stateční a silní! Všecko nechť se mezi
                vámi děje v lásce."
            </div>
            <div>1. Korintským 16:13-14</div>
        </div>
        <img class="general-image" src="assets/general.JPG" alt="all"/>
    </div>
    <h1 name="who">Kdo jsme?</h1>
    <p>Jsme skupina mladých lidí z Bystřice a okolí se společným cílem, jímž je poznání Ježíše Krista skrze Boží
        Slovo (Bibli) a praktický život s Ním.<br/>Mimo to se rádi věnujeme sportům (volejbal a fotbal), chodíme po
        horách, atd.</p>
    <div class="slideshow-padding">
        <div class="slideshow-container">
            <img src="assets/1.jpg" class="fade">
            <img src="assets/2.jpg" class="fade">
            <img src="assets/3.jpg" class="fade">
            <img src="assets/4.JPG" class="fade">
            <img src="assets/5.JPG" class="fade">
            <img src="assets/6.JPG" class="fade">
            <img src="assets/7.jpg" class="fade">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
    <h1 name="where">
        Kde se scházíme?
    </h1>
    <p>Scházíme se vždy u evangelického kostela v Bystřici, převážně v budově Bystřice 107 (také zvaná Kanan).<br/>Případně
        v budově 105, a přes léto na lavicích před kostelem.</p>
    <div class="map-container">
        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Byst%C5%99ice%20107+(Ml%C3%A1de%C5%BE%20Byst%C5%99ice)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
    <h1 name="when">
        Kdy se scházíme?
    </h1>
    <p>
        Každou sobotu v 18:00.
    </p>
    <h1 name="contact">
        Kontakt
    </h1>
    <p>
        +420734281107<br/>
        <a href="mailto:christian.krutsche@gmail.com">christian.krutsche@gmail.com</a>
    </p>
</div>
<script>
    const names = ["who", "when", "where", "contact"];
    const focusPart = (part) => {
        return () => {
            let el = document.getElementsByName(part);
            el[1].scrollIntoView({block: "center", inline: "center", behavior: "smooth"});
            el[0].className = "selected-button";
            el[1].className = "selected-title";
            names.filter(name => name !== part).forEach(name => {
                let el = document.getElementsByName(name);
                el[1].className = "";
                el[0].className = "";
            });
        }
    }
    const handleResize = () => {
        if ((window.innerWidth / window.innerHeight) > (6720 / 4480)) {
            document.querySelector('.image-wrapper').style.width = `${window.innerHeight * 6720 / 4480}px`;
            document.querySelector('.general-image').className = 'general-image rounded-image';
        }
    }
    window.addEventListener('resize', handleResize);
    handleResize();

    let slideIndex = 0;
    const plusSlides = (n) => {
        showSlides(slideIndex += n);
    }
    const showSlides = (n) => {
        let i;
        let slides = document.getElementsByClassName("fade");
        if (n > slides.length - 1) {
            slideIndex = 0;
        } else if (n < 0) {
            slideIndex = slides.length - 1;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex].style.display = "block";
    }
    showSlides(slideIndex);
    setInterval(() => plusSlides(1), 5000);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            plusSlides(-1);
        } else if (e.key === 'ArrowRight') {
            plusSlides(1);
        }
    });
</script>
</body>
</html>
