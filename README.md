# url to pdf docker 


## What

url2pdf docker image based on wkhtmltopdf with Chinese support.

modifid from https://github.com/madnight/docker-alpine-wkhtmltopdf.git 
add web server and Chinese fonts.

## How

build and run docker image.

```
docker build -t url2pdf .
docker run url2pdf -p 80:80 
```

visite http://127.0.0.1:80?url=<url> you will see the pdf.