# syntax=docker/dockerfile:1
FROM python:slim

WORKDIR /code

ENV FLASK_APP=app.py
ENV FLASK_RUN_HOST=0.0.0.0

RUN pip install flask cowsay fortune-python

EXPOSE 5000

COPY . .

CMD ["flask", "run"]
