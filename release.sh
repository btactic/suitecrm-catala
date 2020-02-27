#!/bin/bash

TRANSLATION_VERSION=$(php -f get-version.php)
TRANSLATION_FILENAME="ca_SuiteCRM_v${TRANSLATION_VERSION}.zip"
RELEASES_DIRECTORY="releases"

zip -r ${RELEASES_DIRECTORY}/${TRANSLATION_FILENAME} custom images include install modules manifest.php

echo "INFO: An installable version of translation is available on ${RELEASES_DIRECTORY}/${TRANSLATION_FILENAME}"
echo "INFO: Now you can install the catalan translation on a SuiteCRM installation via the Module Loader"

exit 0
