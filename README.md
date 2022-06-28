## About Food Order Project

This project is prepared only for Asiatech coding challenge.

This code contains some entities as below:

- Food
- Order
- Menu
- User

I will explain all of API endpoint, separately:

## 1) Register

API endpoint

http://localhost:8000/api/register (POST Method)

- input: phone number
- successful output (status 200): ثبت نام شما با موفقیت انجام شد 
- Failed output (status 500): خطایی رخ داده است. لطفا مجددا تلاش نمائید
- Failed output (status 422): Validation errors

## 2) Login

API endpoint

http://localhost:8000/api/login (POST Method)

- input: phone number
- successful output (status 200): token value
- Failed output (status 500): شما قبلا با این شماره همراه ثبت نام نکرده اید
- Failed output (status 422): Validation errors

### 3) Show Foods

API endpoint

http://localhost:8000/api/foods (GET Method)

- successful output (status 200): List of foods


## 4) Show Food Histories

API endpoint

http://localhost:8000/api/food/histories (POST Methods)

- input: token, food_id
- successful output (status 200): List of the food's histories
- Failed output (status 422): Validation errors

## 5) Show Food Inventory

API endpoint

http://localhost:8000/api/food/inventory (POST Method)

- input: token, food_id
- successful output (status 200): count of the food 
- Failed output (status 422): Validation errors

## 6) Show Menus

API endpoint

http://localhost:8000/api/menus (GET Method)

- successful output (status 200): list of menus

## 7) Show Orders

API endpoint

http://localhost:8000/api/order/list (POST Method)

- input: token
- successful output (status 200): List of orders

## 8) Accept Order by Admin

API endpoint

http://localhost:8000/api/order/acceptance (POST Method)

- input: token, order_id, time_of_preparation
- successful output (status 200): سفارش توسط شما تأیید شده و به کاربر نیز اطلاع داده خواهد شد
- Failed output (status 422): Validation errors

