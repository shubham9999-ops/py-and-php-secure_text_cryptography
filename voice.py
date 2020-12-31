#!C:/Python 3.9.0/python
import cgi
import pyttsx3        


engine=pyttsx3.init()

rate=engine.getProperty('rate')
engine.setProperty('rate',150)

volume=engine.getProperty('volume')
engine.setProperty('volume',1.0)

voice=engine.getProperty('voices')
engine.setProperty('voice',voice[1].id)

engine.say("Welcome")
engine.runAndWait()
