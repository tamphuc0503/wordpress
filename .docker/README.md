# How to build
- To build image for production, we will run this command ```docker build -f .docker/Dockerfile -t aprilsea/wordpress-6.0 .```

## Base image
- Go to .devcontainer to build the base image for php8.1-apache first.
- Run build base image ```docker build -f Dockerfile.apache -t docker.io/aprilsea/php8.1-apache .```
- Run to push base image to docker hub with ```docker push docker.io/aprilsea/php8.1-apache ```
## Wordpress image: 

