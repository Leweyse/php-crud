# PHP CRUD APPLICATION 

## Collaborators 

- Daryl Castro
- Zain Imtiaz
- Sofiane Makhout

## What is CRUD?
When we are building web applications, we want our models to provide four basic types of functionality. Most models will have to be able to Create, Read, Update, and Delete. This is often abbreviated as CRUD.

While is an old style of approaching applications, with new ways of thinking (Domain Driven Design, Event Driven Design) that are more flow based - CRUD is still a large portion of all the programs developed today.

## Objectives
- To be able to connect to a database :heavy_check_mark:
- To be able to write a simple Create, Read, Update & Delete (CRUD) application :heavy_check_mark:
- Use a provided MVC structure to work into. :heavy_check_mark:

## Database
In order to interact with the application, it is necessary to have a database with three tables: Student, Teacher, and Class. It is recommended to use the ``` crud.sql ``` file ``` (root) ``` to create the mentioned tables.

## Create a ``` .env ``` file
 - Before working on this project locally create a ```.env``` file in the root of the project. Add the Hostname, Username, Password and Database information from your local device.

```ruby
HOSTNAME=xxxx
USERNAME=xxxx
PASSWORD=xxxx
DATABASE=xxxx
```

## Features
Pages for Students, Teacher & Class.

- A general overview of all records of that entity in a table :heavy_check_mark:
    * Each row should have a button to edit or delete the entity :heavy_check_mark:
    * This page should have a "create new" button :heavy_check_mark:
- A page to edit an existing entity :heavy_check_mark:
- A page to create a new entity :heavy_check_mark: