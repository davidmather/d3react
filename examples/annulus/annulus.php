<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Hello World</title>
    <script src="../../dependencies/loading/react.js"></script>
    <script src="../../dependencies/loading/react-dom.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
      <link rel="stylesheet" href="styles/annulus.css" />
  </head>
  <body>
    <div id="root"></div>
    <script type="text/babel" src="scripts/react.js"></script>	
    <form>
      <input type="radio" name="reference" id="ref-annulus">
      <label for="ref-annulus">Annulus</label><br>
      <input type="radio" name="reference" id="ref-planet" checked>
      <label for="ref-planet">Planets</label><br>
      <input type="radio" name="reference" id="ref-sun">
      <label for="ref-sun">Sun</label>
    </form>
      <script src="../../dependencies/loaded/d3.js"></script>
      <script src="scripts/annulus.js"></script>
  </body>
</html>
