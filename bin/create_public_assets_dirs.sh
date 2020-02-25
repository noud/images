#!/bin/sh
export FAVICON=favicon.ico
cd public
rm ${FAVICON}
ln -s ../storage/app/public/${FAVICON}
ln -s ../storage/app/public/css
ln -s ../storage/app/public/facebox
ln -s ../storage/app/public/fonts
ln -s ../storage/app/public/images
ln -s ../storage/app/public/js
ln -s ../storage/app/public/uploads

#sudo chmod -R a+rw public/css
#sudo chmod -R a+rw public/fonts
#sudo chmod -R a+rw public/images
#sudo chmod -R a+rw public/uploads
#sudo chmod -R a+rw public/${FAVICON}