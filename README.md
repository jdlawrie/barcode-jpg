# barcode-jpg
A small PHP script to automatically generate barcodes from barcode-XXXXX.jpg

To deploy pull both barcode.jpg and .htaccess down into an Apache webroot.

Then copy a barcode font. I've included Code39.ttf from https://www.barcodesinc.com/free-barcode-font

Then requests to:
barcodesite.com/barcode-12342.jpg will generate a barcode for 12342
barcodesite.com/barcode-12342_200.jpg will generate a barcode for 12342 but bigger.

## Demo:
https://images.silvermouse.net/barcode/barcode-SILVERMOUSE.jpg
https://images.silvermouse.net/barcode/barcode-SILVERMOUSE_200.jpg
