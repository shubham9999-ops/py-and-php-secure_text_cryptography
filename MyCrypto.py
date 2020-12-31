#!C:/Python 3.9.0/python
import cgi,os
print('content-type:text/html\r\n\r\n')
import pyttsx3

engine=pyttsx3.init()

rate=engine.getProperty('rate')
engine.setProperty('rate',120)

volume=engine.getProperty('volume')
engine.setProperty('volume',1.0)

voice=engine.getProperty('voices')
engine.setProperty('voice',voice[1].id)

engine.say("Welcome")
engine.runAndWait()

form=cgi.FieldStorage()
t=str(form.getvalue("t"))
c=str(form.getvalue("c"))

def mycrypto():
    key='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 '
    value=key[-1]+key[0:-1]
    encrypt=dict(zip(key,value))
    decrypt=dict(zip(value,key))
    choice=c
    if choice=='E' or choice=='e':
        plainText=t;
        engine.say("Your cypher text is ready")
        engine.runAndWait()
        cypher=''.join([encrypt[l] for l in plainText])
        print('<html><center>')
        print('<br><br><br><br><br><br><br><h3>Plain text::    %s</h3>'%plainText)
        print('<b><h1>Cypher text::    %s</h1>'%cypher)
        print('</center></html>')
        engine.say("Thank you")
        engine.runAndWait()
    elif choice=='D' or choice=='d':
        cypherText=t;
        engine.say("Your plain text is ready")
        engine.runAndWait()
        plain=''.join([decrypt[l] for l in cypherText])
        print('<html><center>')
        print('<br><br><br><br><br><br><br><h1>Cypher text::    %s</h1>'%cypherText)
        print('<br><h1>Plain text::    %s</h1>'%plain)
        print('</center></html>')
        engine.say("Thank you ")
        engine.runAndWait()
    else:
        engine.say("Please enter valid mode")
        engine.say("Thank you")
        engine.runAndWait()

mycrypto()