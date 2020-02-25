#!/bin/sh
export TARGET=output.0b6371c03c92
export JS_TARGET_DIR=storage/app/public/js/
export FACEBOX_SOURCE_DIR=node_modules/jquery.facebox/
export FACEBOX_TARGET_DIR=storage/app/public/facebox/

cp ${FACEBOX_SOURCE_DIR}closelabel.png ${FACEBOX_TARGET_DIR}
cp ${FACEBOX_SOURCE_DIR}loading.gif ${FACEBOX_TARGET_DIR}
cp ${FACEBOX_SOURCE_DIR}jquery.facebox.js ${JS_TARGET_DIR}

cat node_modules/jquery/dist/jquery.min.js > ${JS_TARGET_DIR}${TARGET}.js
cat ${JS_TARGET_DIR}${TARGET}.facebook.js >> ${JS_TARGET_DIR}${TARGET}.js