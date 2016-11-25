<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Hello World</title>
    <script src="../../dependencies/loading/react.js"></script>
    <script src="../../dependencies/loading/react-dom.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
      <link rel="stylesheet" href="styles/sunburst.css" />
  </head>
    <body>
        <div id="root"></div>
        <script type="text/babel" src="scripts/react.js"></script>	
        <form>
          <label><input type="radio" name="mode" value="size"> Size</label>
          <label><input type="radio" name="mode" value="count" checked> Count</label>
        </form>
        <script src="../../dependencies/loaded/d3v3.js"></script>
        <script src="scripts/sunburst.js"></script>
    </body>
</html>