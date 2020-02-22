#!/bin/sh
ln -s ../storage/app/public/css
ln -s ../storage/app/public/images
ln -s ../storage/app/public/uploads

sudo chmod -R a+rw css
sudo chmod -R a+rw images
sudo chmod -R a+rw uploads