# BMI IN PHP
A simple PHP project to calculate Body Mass Index (BMI)

## Index
* **Overview**
* **Prerequisites**
* **Project Structure**
* **Installation and Configuration**
* **Use**
* **BMI Calculation Example**

## Overview

php-study-BMI is a PHP project that demonstrates how to calculate BMI (Body Mass Index) based on weight and height data.

### What is BMI?
BMI is the relationship between weight and height that indicates whether a person is within the ideal weight, above or below. The formula for the calculation is:
```
BMI = Weight (kg) / (Height (m))^2
```

## Prerequisites

* **Local server (XAMPP, WAMP, etc.) or remote server with PHP support.**
* **Basic knowledge of PHP and HTML (if you want to customize the form or the way to present the result).**

## Project Structure
```
.
├── BMI.php      # Script principal para cálculo do IMC
└── README.md    # Documento de descrição do projeto
```

* **BMI.php:** Contains the logic for data entry (weight, height) and displays the result of the BMI calculation.

## Installation and Configuration

Clone or download the repository to your development environment:
```
git clone (https://github.com/nikPaspa/php-study-BMI.git)
```
If you are using a local server (such as XAMPP), place the project folder inside the htdocs directory (or www, depending on the configuration).
Make sure PHP is active and working properly.

## Use
Start the Apache server (or other supported server).
Access the BMI.php file through the browser. Example:
```
http://localhost/php-study-BMI/BMI.php
```
Enter the weight in kilograms (kg) and height in meters (m) as requested in the form or directly in the script (if implemented differently).
The script will display the calculated BMI, along with a classification according to the value range obtained.

## BMI Calculation Example

* **Weight: 70kg**
* **Height: 1.75 m**

Calculation:
```
IMC = 70 / (1.75 * 1.75)
IMC = 70 / 3.0625
IMC = 22.86 (approximately)
```
The value 22.86 indicates that the person is within the weight range considered normal.
