## Introduction

      devtool: XAMPP
      languages: PHP, SQL, HTML, CSS

## Description
   Application that enables CRUD operation on events in a database.

### For Admin 
    Register admin by visiting registeration.php
    After registeration, click link to log in page. 
    Log in to visit admin home.
    click on 'more info' to access further functionalities
    click on either 'update' or 'delete' to update or delete events respectively

### For Public
    visit home.php for public home.
    click on 'more info' to access further functionalities.
    click on 'apply' to apply to apply for event.

### Setup

    Database name: work

### Tables


### public event application table

    Tablename: Applicant

      | column name | datatype |
      | ----------- | -------- |
      | applicant1d | int      |
      | firstname   | varchar  |
      | lastname    | varchar  |
      | email       | varchar  |
      | eventname   | varchar  |
      |date_of_application| date 
    
    set applicantid to auto increment
    set 'date_of_application' to default: current timestamp in mysql database

### events table
 
      | column name | datatype |
      | ----------- | -------- |
      | event1d     | int      |
      | eventname   | varchar  |
      | eventtype   | varchar  |
      | eventdate   | date     |
      | created_at  | timestamp|
      | updated_at  | timestamp|

    set eventid to auto increment
    set both 'created_at' and 'updated_at' to default: current timestamp in mysql database

### admin user registeration table
 Tablename: user

      | column name | datatype |
      | ----------- | -------- |
      | 1d          | int      |
      | username    | varchar  |
      | email       | varchar  |
      | password    | varchar  |
    
    set id to auto increment