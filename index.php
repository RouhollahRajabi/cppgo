<head>
<title>CPPGO- programming C++</title>
<link rel="icon" href="atom.png">
<meta name="description" content="This is a website to develope C++ code and project in low level systems. Leave any type of C++ programming projects to us.">
<link rel="canonical" href="https://cppgo.com/" />
<meta name=”robots” content=”index, follow”>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta property="og:type" content="article" />

<meta property="og:title" content="C++ programming" />

<meta property="og:description" content="Programming projects in c++ language" />

<meta property="og:image" content="atom.png" />

<meta property="og:url" content="https://cppgo.com" />

<meta property="og:site_name" content="CPPGO.com" />




    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "VideoObject",
      "name": "C++ programming",
      "program c++ in CPPGO an leave you projects to us",
      "thumbnailUrl": [
        "https://atom.jpg",
        "https://atom.png",
        "https://atom.png"
       ],
      "uploadDate": "2016-03-31T08:00:00+08:00",
      "duration": "PT1M54S",
      "contentUrl": "https://www.example.com/video/123/file.mp4",
      "embedUrl": "https://www.example.com/embed/123",
      "interactionStatistic": {
        "@type": "InteractionCounter",
        "interactionType": { "@type": "WatchAction" },
        "userInteractionCount": 5647018
      },
      "regionsAllowed": "US,NL"
    }
    </script>
    
    

</head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap");
html {
  scroll-behavior: smooth;
}
body {
  font-family: "Open Sans", Arial, Helvetica, sans-serif;
  background-color: #e8e8e8;
  width: 100%;
  max-width: 100%;
  position: relative;
  padding: 0;
  margin: 0;
}
main {
  width: 90%;
  max-width: 960px;
  padding: 16px 32px;
  margin: 80px auto 80px auto;
  background-color: #fbfbfb;
  border-radius: 8px;
}
menu_in {
  width: 20%;
  max-width: 960px;
  padding: 16px 32px;
  margin: 80px auto 80px auto;
  background-color: #fbfbfb;
  border-radius: 8px;
}
pre strong {
  color: red;
}
h1 {
  font-size: 3.5rem;
  font-weight: normal;
  line-height: 3rem;
  letter-spacing: -3px;
  color: gray;
  text-shadow: 1px 2px 1px white;
}
h1 strong {
  color: rebeccapurple;
  font-weight: 700;
  font-size: 5.9rem;
  border: 3px dashed #eee;
  border-radius: 10px;
  padding: 16px;
}

/*********** start of navbar code ************/
:root {
  --navbar-height: 56px;
  --navbar-background-color: white;
  --navbar-item-text-color: #888888;
  --navbar-item-background-color: var(--navbar-background-color);
  --navbar-item-text-color-hover: rebeccapurple;
  --navbar-item-font: bold 1rem/1rem "Open Sans", Arial, Helvetica, sans-serif;
  --navbar-item-background-color-hover: dimgray;
  --navbar-font-family: "Open Sans", Arial, Helvetica, sans-serif;
}

.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: var(--navbar-height);
  background-color: var(--navbar-background-color);
  font-family: var(--navbar-font-family);
  z-index: 9999;
}

.navbar #togglericon {
  visibility: hidden;
}

.navbar #togglericon:after {
  content: "â˜°";
  position: absolute;
  visibility: visible;
  color: black;
  font-size: 1.5rem;
  width: 1.8rem;
  height: 1.8rem;
  text-align: center;
  margin: 0;
  padding: 0;
  line-height: 1.8rem;
  border-radius: 4px;
  border: 2px solid #ffffff00;
}

.navbar #togglericon:checked:after {
  color: black;
  border: 2px solid #f0f0f0;
}

.nav {
  position: fixed;
  top: 40px;
  left: 0px;
  right: 0px;
  visibility: hidden;
  opacity: 0;
  padding: 8px;
  transition: all 0.5s ease;
  margin: 0px;
  display: flex;
  flex-direction: column;
  background-color: var(--navbar-background-color);
  box-shadow: 0px 4px 4px 0px #00000088;
}

.navbar #togglericon:checked ~ div.nav {
  visibility: visible;
  transition: all 0.3s ease;
  opacity: 1;
}

.nav a {
  padding: 8px;
  font: var(--navbar-item-font);
  text-decoration: none;
  color: var(--navbar-item-text-color);
  background-color: var(--navbar-item-background-color);
}

.nav a:hover {
  color: var(--navbar-item-text-color-hover);
}

.nav p {
  margin: 0;
  padding: 8px;
  color: var(--navbar-item-text-color);
}

.dropdown {
  position: relative;
  display: block;
  color: var(--navbar-item-text-color);
  font: var(--navbar-item-font);
}
.dropdown label {
  display: block;
  padding: 8px;
}

.dropdown label:after {
  position: absolute;
  content: "â–¼";
  color: var(--navbar-item-text-color);
  font-size: 0.75rem;
  top: 8px;
  margin-left: 4px;
}

.dropdown label:hover {
  color: var(--navbar-item-text-color-hover);
}
.dropdown label:hover:after {
  color: var(--navbar-item-text-color-hover);
}
.dropdown input {
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.dropdown input:checked ~ ul {
  max-height: 500px;
  transition: max-height 0.5s ease;
  margin: 16px 0;
}
.dropdown ul {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
  max-height: 0px;
  transition: max-height 0.25s ease;
}
.dropdown li {
  margin: 12px 0px 12px 16px;
}

.dropdown a {
  color: black;
  text-decoration: none;
  font-weight: normal;
}

.navbar form {
  display: flex;
  flex-direction: row;
  padding: 12px;
  justify-content: flex-start;
}

.navbar form input {
  font-size: 1rem;
  width: 8rem;
  padding: 0;
  margin: 0 8px 0 0;
}
.navbar form button {
  background-color: white;
  border: 1px solid #bbbbbb;
  padding: 4px;
  width: 1.8rem;
  height: 1.8rem;
  border-radius: 4px;
}

.brand {
  position: fixed;
  display: inline-flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  background-color: var(--navbar-background-color);
  visibility: visible;
  top: 0;
  left: 22.5%;
  width: 50%;
}
.brand-icon {
  font-size: 1.8rem;
  font-weight: bolder;
  color: rebeccapurple;
}
.brand-name {
  margin-left: 8px;
  font-weight: bolder;
}

/* helpers */
.navbar-centered {
  justify-content: center;
}

@media (min-width: 768px) {
  .navbar #togglericon:checked ~ div.nav,
  .navbar #togglericon ~ div.nav {
    visibility: visible;
  }

  .navbar {
    height: var(--navbar-height);
    background-color: var(--navbar-background-color);
    flex-direction: row;
    display: flex;
    visibility: visible;
    position: fixed;
    left: 0;
    top: 0;
    opacity: 1;
    width: 100%;
    box-shadow: 0px 1px 5px 0px #88888888;
  }

  .toggler {
    display: none;
  }

  .navbar form {
    border-top: 0px;
    border-bottom: 0px;
    padding: 8px;
  }

  .nav {
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    top: 0;
    opacity: 1;
    box-shadow: none;
    background-color: #ffffff00; /* transparent */
  }

  .at-center {
    position: absolute;
  }
  .at-right {
    position: absolute;
    justify-content: flex-end;
  }

  .dropdown {
    margin: 0 8px;
  }
  .dropdown ul {
    position: absolute;
    top: 24px;
    display: flex;
    flex-direction: column;
    background-color: var(--navbar-background-color);
    padding: 0;
    border: 1px solid white;
  }
  .dropdown input:checked ~ ul {
    max-height: 500px;
    transition: max-height 0.5s ease;
    margin: 16px 0;
    border-left: 1px solid #cccccc;
    border-bottom: 1px solid #cccccc;
    border-right: 1px solid #cccccc;
    box-shadow: 5px 5px 5px 0px #99999988;
  }

  .dropdown ul li {
    width: 100%;
    margin: 4px;
    padding: 0;
    display: flex;
  }
  .dropdown ul li a {
    padding: 8px;
    margin: 0;
    display: block;
    width: 100%;
    white-space: nowrap;
  }
  .navbar form {
    margin-top: 0px;
  }

  .brand {
    position: relative;
    display: flex;
    flex-direction: row;
    align-items: center;
    visibility: visible;
    margin: 0;
    padding: 0;
    left: 0;
    width: 150px;
    transform: translate(0, 0);
    white-space: nowrap;
  }
}

@media (min-width: 1200px) {
  .nav {
    justify-content: center;
  }
  .nav * {
    margin: 0px 8px;
  }
  .navbar form {
    margin-top: 0;
  }
}

</style>

<body>
  <!-- the menu starts here -->
  <div class="navbar">

    <label for="togglericon" class="toggler" checked></label>
    <input type="checkbox" id="togglericon" class="toggler" />

    <div class="brand">
      <span class="brand-icon">âš›</span>
      <span class="brand-name">CPPgo</span>
    </div>

    <div class="nav">
      <!-- reposition the menu with: -->
      <!-- div class="nav at-center" -->
      <!-- div class="nav at-right"  -->

      <a href="#top">Home</a>
      <a href="about.php">About</a>

      <div class="dropdown">
        <label for="toggle-1">Services</label>
        <input type="checkbox" id="toggle-1" />
        <ul>
          
          <li><a href="group/">C++ Programming</a></li>

        </ul>
      </div>

      <div class="dropdown">
        <label for="toggle-2">Social</label>
        <input type="checkbox" id="toggle-2" />
        <ul>
          <li><a href="https://wa.me/message/ZSNCMCKOXKX6F1">Whatsapp</a></li>
          <li><a href="https://instagram.com/cppgo">Instagram</a></li>

        </ul>
      </div>
     <!-- <a href="#">Contact</a>
      <a href="https://blog.cppgo.com">blog</a> 
      <form>
        <input type="text" placeholder="search" name="search" />
        <button>ðŸ”Ž</button>
      </form> -->
    </div>
  </div>
  <!-- the menu ends here -->
<!-- 
<main>
   <p>learn C++</p> 
    
</main>
-->
  <main>
    <h1><strong>CPPGO</strong><br>HAS<br>DIFFERENT<br>SOLUTIONS</h1>
    <p>This is a website to develope C++ code and project in low level systems.</p>
    <p>Leave any type of C++ programming projects to us.</p>
    <p>CPPGO features:</p>
    <ul>
      <li>Hight  <strong>Resposibility </strong></li>
      <li>In the  <strong>shortest</strong> Time</li>
      <li>Best <strong>quality </strong></li>
      <li> <strong>Flexible </strong> codes</li>

    </ul>
    <p>How to order:</p>
    <ul>
      <li>Follow us in Instagram page <strong><a style="text-decoration:none" href="https://www.instagram.com/cppgocom/">cppgocom</a></strong></li>
      <li>Send Email to us by  <strong><a style="text-decoration:none" href = "mailto: support@cppgo.com">Support@cppgo.com</a></strong></li>
      <li>Send message on <strong><a style="text-decoration:none" href="https://wa.me/message/ZSNCMCKOXKX6F1">Whatsapp</a> </strong></li>
      

    </ul>

    
    <div id="filler" style="height: 50vh;"></div>
  </main>
<p align="center">Copyright reserved <b>&#169;</b>2021</p>
