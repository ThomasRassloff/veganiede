### Description -howto

## How to use the simply-api and simply-sdk

#### get the auth-token

    curl -XPOST -d 'username=name&password=password&grant_type=password&client_id=id\
    &client_secret=secret&client_name=name' 'http://localhost/oauth/v2/token'

that command should create something like:

    {"access_token":"NTcwMTFhMGM4ZWRjYmUzNmEyNDdkZjY4NjI1ZjE0ZTk3YjdkODIxMGFkMWZhMWZiNThiNDZmNjM5ZjMyZDM2OA",\
    "expires_in":3600,"token_type":"bearer",\
    "refresh_token":"ZjQ2MjUxODcyNDA4YTM2YTkxY2NiYzNiOTU3MGZkMDMyYWZmMjBiM2IxZmFhZmFkNTUxN2IxMWY0Y2E2NjMwMA"}


the access_token you need to create, read, update, delete USERS (CRUD)

#### create - to write a new User into the database

    curl -X POST -H 'Content-Type: application/json' \ 
    http://localhost/users?access_token=privat_token \
    -d '{"username": "Mustermann","email": "muster@mannfraukind.de","plain_password": "dein_passwort"}'
    
#### read - to show all USERS

    curl -X GET -H 'Content-Type: application/json' \ 
    http://localhost/users?access_token=privat_token

#### update - to edit a USER by id

    curl -X PUT -H "Content-Type: application/json" \ 
    http://localhost/users/9?access_token=privat_token \
    -d '{"id":"9","username": "OOOOrossi","email": "admin1@rassloff.info","plain_password": "asdwerdfwerf"}'

#### delete - to delete a USER by id

    curl -X DELETE -H "Content-Type: application/json" \ 
    http://localhost/users/9?access_token=privat_token 


#### JSON examble 
    {
    "id": "2",
    "username": "bla",
    "password": "blub"
    }
    
#### benötigte Daten für user

password, username, email, 
optional:
firstname, surname, gender











Source:

OAuth:

https://entwickler.de/online/agile/so-funktioniert-oauth2-2-134327.html

JavaScript Daten und Email prüfen:

https://www.strassenprogrammierer.de/mit-javascript-formulare-ueberpruefen_tipp_389.html

http://voerro.com/blog/authentication-via-social-media-in-laravel-5.5-with-socialite

http://justlaravel.com/laravel-social-login-using-socialite/#google+

