#!/usr/bin/python

import sys
import datetime
import Adafruit_DHT 
import time
import calendar
import smtplib

sensor = 11
pin = 4

humidity, temperature = Adafruit_DHT.read_retry(sensor, pin)

ts = str(calendar.timegm(time.gmtime())) + "000"

if temperature is not None:
    print(ts + ',' '{0:0.1f}'.format(temperature))

if humidity is not None:
    print(ts + ',' + '{0:0.1f}'.format(humidity))
