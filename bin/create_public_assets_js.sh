#!/bin/sh
export TARGET=output.0b6371c03c92
cat storage/app/public/js/jquery-1.6.2.min.js > storage/app/public/js/${TARGET}.js
cat storage/app/public/js/${TARGET}.facebook.js >> storage/app/public/js/${TARGET}.js