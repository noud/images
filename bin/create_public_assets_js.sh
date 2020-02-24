#!/bin/sh
export TARGET=output.0b6371c03c92
cat node_modules/jquery/dist/jquery.min.js > storage/app/public/js/${TARGET}.js
cat storage/app/public/js/${TARGET}.facebook.js >> storage/app/public/js/${TARGET}.js