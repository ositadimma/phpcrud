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

    | tablename | column 1 | column 2 | column 3 | column 4 | column 5 | column6 |
    | --------- | -------- | -------- | -------- | -------- | -------- | ------- |
    | applicant | applicant1d(int) | firstname(varchar) | lastname(varchar) | email(varchar) | eventname(varchar) | date_of_application(date)|
    | events | event1d(int) | eventname(varchar) | eventtype(varchar) | eventdate(date) | created_at(timestamp) | updated_at(timestamp)|
    | user | 1d(int) | username(varchar) | email(varchar) | password(varchar) |  |   |


