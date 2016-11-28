# d3react
<p>This is an example project to demonstrate using React and d3.js. React is a javascript polyfill. All react scripts must be compiled to pure javascript in order to run correctly. Furthermore in order to run correctly the following scripts must be run on a server. I have used php as an example feel free to change the extension as desired.</p>

<h2>Compiling React Steps</h2>
<ol>
<li>install nodejs</li>
<li>open terminal/commandprompt to project directory</li>
<li>npm init</li>
<li>npm install babel-loader babel-core babel-preset-es2015 babel-preset-react --save-dev</li>
<li>npm install webpack --save-dev</li>
<li>npm install react --save-dev</li>
<li>npm install react-dom --save-dev</li>
<li>create webpack.config.js and package.js as outlined in the compiling section</li>
<li>create app.js file containing your uncompiled react code</li>
<li>npm run webpack</li>
<li>react should compile to bundle.js</li>
</ol>
