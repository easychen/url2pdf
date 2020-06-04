!something wrong with new base image, need to be fixed ... 

# url to pdf docker 

![](https://i.loli.net/2019/04/29/5cc6a665b70ae.gif)


## What

url2pdf docker image based on wkhtmltopdf with chinese support.

modifid from https://github.com/madnight/docker-alpine-wkhtmltopdf.git  && nimmis/alpine-micro
add web server and chinese fonts.

## How

build and run docker image.

```
docker build -t url2pdf .
docker run -p 80:80  url2pdf 
```

visit `http://127.0.0.1:80?url=<url>` you will see the pdf.
