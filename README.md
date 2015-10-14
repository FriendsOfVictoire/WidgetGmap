#Victoire DCMS Google Maps Bundle
============

##What is the purpose of this bundle

This bundles gives you access to the *Google Maps Widget*.
This widget can put a dynamic Google Maps within your website with the following settings :

* Latitud
* Longitud
* Map's zoom
* Title of the Map
* Hide or not the pointer
* Import of any KML File

##Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

##Install the bundle

Run the following composer command :

    php composer.phar require friendsodvictoire/gmap-widget

##Reminder

Do not forget to add the bundle in your AppKernel !

```php
    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\GmapBundle\VictoireWidgetGmapBundle(),
            );

            return $bundles;
        }
    }
```

##KML

The widget generate a bug if the KML file is upload on a local project.
You can test KML import with this [example](https://developers.google.com/maps/documentation/javascript/examples/layer-kml) given by Google.

## Loading gmap Api

To fix multiple google maps api call, a javascript is used to call once the api, this javascript trigger an event with google
map callback to initialize gmaps.

