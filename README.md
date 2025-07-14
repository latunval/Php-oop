# Library Management System in PHP (OOP)

## Overview
This project implements a simple library system using PHP OOP principles: encapsulation, inheritance, polymorphism, abstraction, interfaces, and namespaces.

## Features
- Book and Magazine management (via `LibraryItem`)
- Member registration
- Borrowing & returning items with due dates
- Iteration over library items
- Static counter for total items

## Namespaces
Namespaces are used to organize code and avoid class name collisions. `Entities` holds Book, Magazine, etc., while `Actions` handles borrow logic. This makes the codebase modular and scalable.

## Iterator Interface
The `Library` class implements `Iterator`, allowing you to loop through books using `foreach`. This enhances readability and lets you treat the library like a collection.

## Static Properties
The static `$itemCount` in `Library` tracks total books/magazines. This shared state helps monitor library inventory across all instances.

## Run the project
Clone repo
Open your Xampp, start your Apache run As usual `php index.php`.


## Goes by the name 
Abdussalam abdulmojeed  (Valentino)
---
