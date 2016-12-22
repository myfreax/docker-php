#!/bin/bash
docker rm -f $(docker ps -qa)
docker-compose up