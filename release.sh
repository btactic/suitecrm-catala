#!/bin/bash

zip -r releases/suitecrm-catala.zip custom images include install modules manifest.php

echo "INFO: An installable version of translation is available on releases/suitecrm-catala.zip"
echo "INFO: Now you can install the catalan translation on a SuiteCRM installation via the Module Loader"

exit 0
