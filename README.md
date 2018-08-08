Contao Bundle: SchmidtdenktmitMailchimpBundle
===============================================================

Dies ist eine Bundle-Hülse für **Schmidt denkt mit**! Keine Mailchimp-Funktionalität in der Bundle-Hülse verfügbar!

Das SchmidtdenktmitMailchimpBundle ist ein Hülsenbundle für Mailchimp. Das Bundle fügt Contao ein Modul hinzu, mit dem individuellen Inhalt (z.B. ein Mailchimp-Formular) eingebunden werden kann. Der auszugebende Inhalt kann in der Klasse ModuleMailchimp in der ```prepareMailchimp``` Methode konfiguriert und angepasst werden.


Installationsanleitung
----------------------

Zur Installation müssen Sie zuerst ihre composer.json im Document-Root um den Punkt Repository ergänzen. Dies geht auf zwei Arten:

- Lokal - Die Erweiterung ist in einem lokalen, via Dateisystem erreichbaren "bundles" Ordner abgelegt:
```
"repositories": [
        {
            "type": "path",
            "url": "../bundles/schmidtdenktmit/mailchimp-bundle",
            "options": {
                "symlink": false
            }
        }
    ],
```
In diesem Fall bitte auch die composer.json des Bundles selbst um folgende Zeile ergänzen. Über das Files-Repository kann sonst die Version nicht bestimmt werden.
```
    "version": "1",
```

- Privates VCS - Das Bundle liegt auf einem privaten Repository (z.B. Github):
```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/trilobit-gmbh/schmidtdenktmit-contao-mailchimp-bundle"
        }
    ],
```

Danach muss im Document-Root ein Composer Require ausgeführt werden:
```
composer require trilobit-gmbh/schmidtdenktmit-contao-mailchimp-bundle
```


Compatibility
-------------

- Contao version >= 4.4.20
