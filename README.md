# NavFastDL-php
Auto build blank nav file, Auto bzip2 compress


## Demo

Site: https://static.csgogamers.com

Test url (client-side): https://static.csgogamers.com/navdownloader/?nav=ze_sandstorm_go_v1_3

Test url (server-side): https://static.csgogamers.com/navdownloader/unbz2.php?nav=ze_sandstorm_go_v1_3


## URL Rewrite Rule:

```XML
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <system.webServer>
        <rewrite>
            <rules>
                <rule name="nav">
                    <match url="maps/(.*).nav.bz2" />
                    <action type="Rewrite" url="navdownloader/?nav={R:1}" />
                </rule>
            </rules>
        </rewrite>
    </system.webServer>
</configuration>
```

Example url: https://static.csgogamers.com/maps/ze_sandstorm_go_v1_3.nav.bz2
