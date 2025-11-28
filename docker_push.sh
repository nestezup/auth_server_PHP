#!/usr/bin/env bash
# Build Docker image and push to Docker Hub

set -e

# Replace with your Docker Hub username and image name
DOCKERHUB_USERNAME="your-username"
IMAGE_NAME="php-server"
TAG="latest"

# Build the image
docker build -t $DOCKERHUB_USERNAME/$IMAGE_NAME:$TAG .

# Log in to Docker Hub (will prompt for credentials)
docker login

# Push the image
docker push $DOCKERHUB_USERNAME/$IMAGE_NAME:$TAG
