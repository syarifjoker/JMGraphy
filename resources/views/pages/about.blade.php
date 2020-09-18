<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Main Page</title>

        <style>
      h1,h2,h3,h4,h5,h6 {
        font-family: Verdana;
        margin-top: 0;
        margin-bottom: 0.5rem
      }

      p {
        font-family: Verdana;
        text-align: justify;
        margin-top: 0;
        margin-bottom: 1rem
      }

      ul {
        font-family: Verdana;
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #011936;
      }

      li {
        float: left;
        font-family: Verdana;
      }

      li a{
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      li a:hover:not(.active) {
        background-color: #FDFFFC;
        color: black;
      }

      .active {
        background-color: #008080;
      }

      .hero{
        background-size: cover;
        height: 1010px;
        position: relative;
        overflow: hidden;
        z-index: 0;
      }

      .featured{
        background-size: cover;
        height: 1010px;
        position: relative;
        overflow: hidden;
        z-index: 0;
      }

      .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
      }

      footer {
        background-color: #fffff;
      }
    </style>
    </head>
    <body>
        <!---Header Start--->
    <header>
      <div>
        <h1>JM Graphy Website</h1>
      </div>
      <ul>
        <li><a class="active" href='index'>Home</a></li>
        <li><a href='about'>About Us</a></li>
        <li><a href='services'>Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact Us</a></li>
        <li style="float:right"><a href="#">Sign In/Sign UP</a></li>
      </ul>
    </header>
  <!---Header end--->
 
  <!---About Us Start --->
  <section>
    <div class="featured">
      <img src="..\WEB DESIGN\Assets\img\hero-texture.png" style="height: 150px">
    <div class="container">
      <div class="title text-center">
        <h1 id="About_Us" class="title-black" style="align:center; color: black">About Us</h1>
      </div>
    </div>
    <div class="container" style="font-size: 20px; color:black;">
      <p style="text-align: justify;"><i><b>"Just Moment Graphy"</b></i> also known as <b>JM Graphy</b> is a freelance Photographer, Videographer and Graphic Designer that has been estalished since 2017. Our operation base at Gombak, Selangor and has been travelled to all aorund East Malaysia.</p>
    </div>
    </div>
  </section>
  <!---About Us End --->
  
  </body>
  <footer>
    <div style="background-color: #011936;">
      <p style="color:white;">&copy; 2020 All Rights Reserved. Design by JMGraphy</p>
    </div>
  </footer>
</html>
