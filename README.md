# Plant E-Commerce Website  
A full-stack web application designed for browsing, purchasing, and managing plant products online.  
This project includes a complete frontend, backend, and database system for both customers and administrators.

---

## 1. Introduction  
The rapid advancement of technology has shifted traditional shopping to digital platforms.  
The **Plant E-Commerce Website** provides a complete online marketplace for plant enthusiasts to browse plants, learn about them, and purchase safely from home.  

The system integrates:  
- A **user-friendly shopping interface**  
- A robust **admin management dashboard**  
- A secure and scalable **database-driven backend**

This ensures a smooth shopping experience for users and efficient management for administrators.

---

## 2. Project Objectives & Expected Outcomes  

### **Objectives**
- Develop a responsive, user-friendly e-commerce website for plants  
- Allow customers to register, log in, browse products, and manage cart & orders  
- Integrate a secure checkout system with database support  
- Provide a full admin dashboard for managing users, plants, messages & orders  
- Implement strong database connectivity using PHP + MySQL  

### **Expected Outcomes**
- Fully functional online plant shopping platform  
- Admin dashboard for product, user & order management  
- Improved user experience through intuitive UI and secure login  
- Scalable architecture for future upgrades (payment gateways, delivery tracking, etc.)

---

## 3. Scope of the Project  

### **User Features**
- User registration & secure login  
- Browse plant listings with names, prices & images  
- Add to cart, update cart, and checkout  
- View order history and payment status  
- Send messages/queries to admin  

### **Admin Features**
- Secure admin login with dashboard  
- Add / Update / Delete products  
- Manage user accounts  
- Track & update order statuses  
- View and respond to customer messages  

### **Technology Scope**
- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL (phpMyAdmin)  
- **Tools:** XAMPP for local hosting & testing  

---

## 4. Database Design  

### **Entities & Attributes**

#### **Users**
- id (PK), name, email, password, user_type, created_at, updated_at  

#### **Products**
- id (PK), name, price, image  

#### **Cart**
- id (PK), user_id (FK), name, price, image, quantity  

#### **Orders**
- id (PK), user_id (FK), method, address, total_price, placed_on, payment_status  

#### **Order_Items**
- id (PK), order_id (FK), product_id (FK), quantity, price  

#### **Messages**
- id (PK), user_id (FK), name, email, number, message  

### **Relationships**
- Users → Orders: 1 → ∞  
- Users → Cart: 1 → ∞  
- Users → Message: 1 → ∞  
- Products → Cart: 1 → ∞  
- Orders → Order_Items: 1 → ∞  
- Products → Order_Items: 1 → ∞  

---

## 5. Database Integration
The backend (PHP) interacts with the database to ensure real-time updates.

### **Key Backend Operations**
- **Login / Registration:** Validates credentials from users table  
- **Cart Operations:** Add/update/delete cart items  
- **Checkout:** Store order details and clear cart  
- **Admin Dashboard:**  
  - Fetch products  
  - Manage users  
  - Update order statuses  
  - Read customer messages  

Session management ensures users stay logged in across pages.

---

## 6. Module-Wise Implementation  

### **1. User Authentication Module**
Files: `login.php`, `register.php`  
- Secure login/registration  
- Password hashing  
- Session management  

### **2. Homepage & Informational Pages**
Files: `home.php`, `about.php`, `contact.php`  
- Display products & plant details  
- Contact form submits messages to database  

### **3. Product Management Module**
Files: `shop.php`, `admin_products.php`  
- Display plant listings with images & prices  
- Add to cart functionality  
- Admin CRUD operations  

### **4. Cart & Checkout Module**
Files: `cart.php`, `checkout.php`  
- Update quantities  
- Remove items  
- Store order info into database  

### **5. Admin Module**
Files: `admin_page.php`, `admin_orders.php`, `admin_users.php`, etc.  
- Dashboard with total products, orders, and users  
- Order management & payment updates  
- Message viewer  
- User management  

---

## 7. Project Structure  

## Project Structure 

```
project/
│
├── frontend/                     
│   ├── index.html              
│   ├── about.html               
│   ├── contact.html             
│   ├── login.html              
│   ├── register.html           
│   ├── product_details.html     
│   ├── cart.html                
│   ├── style.css                
│   └── scripts.js               
│
├── backend/
│   ├── config/
│   │   └── connection.php       
│   │
│   ├── user/                    
│   │   ├── login.php            
│   │   ├── register.php         
│   │   ├── fetch_products.php   
│   │   ├── add_to_cart.php      
│   │   └── checkout.php         
│   │
│   └── admin/                  
│       ├── admin_login.php      
│       ├── admin_dashboard.php  
│       ├── add_product.php      
│       ├── update_product.php   
│       ├── delete_product.php   
│       ├── manage_orders.php    
│       └── upload_image.php     
│   
│   
│       
│
└── database/
    └── plant_db.sql             

```
## Role-Based Feature 

### **User Features**
- Browse plants  
- View plant details  
- Add items to cart  
- Create account & login  
- Contact form  
- (Optional) Checkout system  

### **Admin Features**
- Admin login  
- Dashboard overview  
- Add new plant products  
- Update existing product info  
- Delete products  
- Manage and view user orders  
- Upload and manage images  



---

## 9. Screenshots  

```
![Homepage](screenshots/home_page.png)
![Shop Page](screenshots/shop_page.png)
![Cart](screenshots/cart_page.png)
![Admin Dashboard](screenshots/admin_dashboard.png)
```

---

## 10. Full Project Report  
You can attach your detailed academic PDF report here:  
 **[Download Full Report](https://github.com/HKR-XV-20-R3/Plant-ecom-project/blob/main/Project%20report/ECE_3100_Project_Report_2110015.pdf)**  
*(Add your PDF in a folder named `report/` and link it above.)*

---
 
**Humayun Khalid**  
Web Developer • Student  

