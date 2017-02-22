// Load Laravel elixir 
var Elixir = require('laravel-elixir');
// Load elixir busting, this append a new Elixir task called "busting" 
require('elixir-busting');
 
// Override elixir configuration 
var config = Elixir.config;
 
// Change your assets path 
config.assetsPath = './public/assets';
 
Elixir(function(mix) {
    // Instead used a mix.version() task, use a mix.busting() task 
    mix.busting([
        // replace css files path with yours 
        config.assetsPath + '/css/style.css',
        
 
        // replace script files path with yours 
      
    ]);
});