#!/bin/bash

docker buildx build \
  --platform linux/amd64 \
  --file docker/Dockerfile \
  --tag yqchilde/acg-faka:v3.0.9 \
  --push .