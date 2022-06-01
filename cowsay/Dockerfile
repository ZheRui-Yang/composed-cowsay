# syntax=docker/dockerfile:1
FROM python:slim

WORKDIR /code

ENV FLASK_APP=app.py
ENV FLASK_RUN_HOST=0.0.0.0

# RUN apk add --no-cache gcc musl-dev linux-headers
# RUN apt update && apt upgrade
RUN pip install flask cowsay fortune-python

EXPOSE 5000

COPY . .

CMD ["flask", "run"]
