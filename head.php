<head>
  <!-- Note that all "empty" (self-closing) elements need to end with a backslash according to HTML 4 specifications.
       As of HTML 5, they have been renamed to "void elements" and do NOT syntactically require backslashes.
         HTML 4 Empty Element Example: <img src="URL" />
         HTML 5 Void Element Example: <img src="URL> 

       Common void elements include: br, image, hr, link, meta
  -->

  <!-- The meta tag describes the character set of the page. "utf-8" is the standard. -->
  <!-- The innertext of the "title" tag will appear on the Window -->
  <meta charset="utf-8">
  <title>Snowboard Penetration Testing Demo</title>  

  <!-- As of HTML5, developers have control over the "viewport" meta element whichthe user's visible area of a web page. 
       Most modern developers include this element, and defining this tag is common practice in the industry. -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The "X-UA-Compatible" meta element forces IE to render in the specified version. -->
  <meta name="X-UA-Compatible" content="IE=Edge">


  <!-- Bootstrap is a library that allows developers to simplify the layout and styling for their webpage. -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- The traditional usage of the meta description element to summarize the site contents for for search engines. -->
  <meta name="description" content="This is a simple webpage that is designed to teach penetration testing 
                                    via a snowboard metaphor.">

  <style>
    /* Global Reset */
    * {
      margin:  0;
      padding: 0;
      -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
              box-sizing: border-box;
    }

    /* Global Styles */
    .binding {
      width: 180px;
    }

    .binding-left {
      -webkit-transform: scaleX(-1);
      transform: scaleX(-1);
    }

    a {
      color: white; 
    }

    a:hover {
      color: #CCC;
    }

    main {
      width: 80%;
      margin: auto;
      text-align: center;
      position: relative;
    }

    body {
      background-color: #EEE;
      background-image: url(./images/background.jpg);
      background-size: cover;
      color: white;
    }

    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      background-color: rgba(0,0,0,.7);
    }

    h1, h2 {
      width: 100%;
      background-color: #222;
      text-align: center;
    }

    h2 {
      background-color: #444;
    }
    
    /* Targeted Styles */
    #snowboard {
      width: 80%;
    }

    #snowboard img:hover {
      -webkit-transform: scale(1.1);
              transform: scale(1.1);
              transition: all .4s ease-in-out;
    }

    #binding-left img {
      position: absolute;
      top: 150px;
      left: 20%;
    }

    #binding-left img:hover {
      -webkit-transform: rotate(8deg) scaleX(-1);
              transform: rotate(8deg) scaleX(-1);
              transition: all .2s ease-in-out;
    }

    #binding-right img {
      position: absolute;
      top: 150px;
      right: 20%;
    }

    #binding-right img:hover {
      -webkit-transform: rotate(-8deg);
              transform: rotate(-8deg);
              transition: all .2s ease-in-out;
    }
  </style>
</head>
