//this is just an example to call multiple apis in a future with some config

//the problem is that google maps api correct callback must be send in request
var apis = {
    'gmap': 'https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&callback=triggerGmapEvent&language=' + locale + '&key=' + gmapApiKey
};

// list of apis that are loaded
var loadedApis = [];

//we load apis
window.onload = loadApis(apis);

function loadApis(apis)
{
    for(var apiName in apis){
        if((loadedApis.indexOf(apiName)))
        {
            //we add script to load them
            //TODO send a callback that work correctly when api is fully load

            addScript(apis[apiName]);
            loadedApis.push(apiName);
        }
    };
}

//a general callback to trigger an api event
function triggerApiEvent(apiName)
{
    $(document).trigger(apiName);
}

//use a an event specific for gmap callback
function triggerGmapEvent()
{
    $(document).trigger('gmap');
}

// this function add the script and allow to use a callback(doesn't work for Gmap Api)
function addScript( url, callback ) {
    var script = document.createElement( 'script' );
    if( callback ) script.onload = callback;
    script.type = 'text/javascript';
    script.src = url;
    document.head.appendChild( script );
}