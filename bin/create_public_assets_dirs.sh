#!/bin/sh
ln -s storage/app/public/css public/
ln -s storage/app/public/fonts public/
ln -s storage/app/public/images public/
ln -s storage/app/public/js public/
ln -s storage/app/public/uploads public/

sudo chmod -R a+rw public/css
sudo chmod -R a+rw public/fonts
sudo chmod -R a+rw public/images
sudo chmod -R a+rw public/uploads