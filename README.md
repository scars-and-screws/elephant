# PHP Learning Repository 🐘

A comprehensive PHP learning resource with practical examples covering fundamental to advanced concepts.

## 📚 Table of Contents

- [About](#about)
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
- [Topics Covered](#topics-covered)
  - [Basic PHP Concepts](#basic-php-concepts)
  - [Logic and Control Flow](#logic-and-control-flow)
  - [Loops](#loops)
  - [Object-Oriented Programming](#object-oriented-programming)
- [File Structure](#file-structure)
- [Usage](#usage)

## About

This repository is a hands-on PHP tutorial containing well-commented code examples. Each file focuses on specific PHP concepts with clear explanations and emoji annotations to make learning fun and easy to follow.

## Prerequisites

- PHP 8.0 or higher installed on your machine
- A web server (Apache, Nginx) or PHP's built-in development server
- A code editor (VS Code, PHPStorm, etc.)

## Getting Started

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd elephant
   ```

2. Start PHP's built-in development server:
   ```bash
   php -S localhost:8000
   ```

3. Open your browser and navigate to:
   - `http://localhost:8000/basic.php`
   - `http://localhost:8000/logic.php`
   - `http://localhost:8000/loops.php`
   - `http://localhost:8000/oops.php`

## Topics Covered

### Basic PHP Concepts

**File:** `basic.php`

| Topic | Description |
|-------|-------------|
| Comments | Single-line (`//`, `#`) and multi-line (`/* */`) comments |
| Variables | Variable declaration with `$` prefix |
| Constants | Defining constants using `const` and `define()` |
| Data Types | String, Integer, Float, Boolean, Null, Array |
| Arrays | Indexed arrays and associative arrays |
| Typecasting | Converting between data types |
| String Concatenation | Combining strings using `.` operator |

### Logic and Control Flow

**File:** `logic.php`

| Topic | Description |
|-------|-------------|
| If/Else Statements | Conditional branching |
| Switch Statement | Multiple condition handling |
| Match Expression | PHP 8+ match expression (like improved switch) |
| Functions | Basic function declaration and calling |
| Parameters | Function parameters with default values |
| Return Types | Type declarations for function returns |
| Type Hinting | Specifying parameter types |
| Arrow Functions | Short closure syntax (`fn() =>`) |
| Anonymous Functions | Lambda/closure functions |

### Loops

**File:** `loops.php`

| Topic | Description |
|-------|-------------|
| While Loop | Condition-based iteration |
| Do-While Loop | Execute at least once, then check condition |
| For Loop | Counter-based iteration |
| Foreach Loop | Array iteration |
| Break | Exit loop early |
| Continue | Skip current iteration |
| Nested Loops | Loops within loops |
| Practical Exercises | Resistor color code and two-fer functions |

### Object-Oriented Programming

**File:** `oops.php`

| Topic | Description |
|-------|-------------|
| Classes & Objects | Creating blueprints and instances |
| Constructor | `__construct()` method for initialization |
| Constructor Property Promotion | PHP 8+ shorthand syntax |
| Encapsulation | Public, private, protected visibility |
| Getters & Setters | Accessor and mutator methods |
| Inheritance | Extending classes with `extends` |
| Method Overriding | Redefining parent methods in child classes |
| Abstract Classes | Partial implementation templates |
| Interfaces | Contract definitions with `implements` |
| Polymorphism | Same interface, different implementations |
| Anonymous Classes | On-the-fly class creation |
| Exception Handling | Try/catch/finally blocks |
| DateTime | Working with dates, times, and timezones |

## File Structure

```
elephant/
├── basic.php     # PHP fundamentals
├── logic.php     # Control flow and functions
├── loops.php     # Iteration concepts
├── oops.php      # Object-oriented programming
└── README.md     # This file
```

## Usage

Each PHP file is a standalone HTML page with embedded PHP code. The code includes:

- **Emoji annotations** 🎯 for easy navigation
- **Comments** explaining each concept
- **Practical examples** you can run and modify
- **Exercises** to practice your skills

Browse through each file in order to progressively learn PHP concepts, or jump to any specific topic you want to explore.

---

Happy coding! 🚀
