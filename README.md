# phpcrud
# CRUDPHP - Simple CRUD Application in PHP  

## Author: Alfred  Festo kalinga

This is a simple CRUD (Create, Read, Update, Delete) application built with PHP and MySQL.  

---

## **Installation and Setup**  

### **1. Prerequisites**  
Ensure you have the following installed on your system:  
- Linux (Ubuntu, Debian, Kali, etc.)  
- XAMPP (Apache, MySQL, PHP)  
- Git (optional)  

---

### **2. Clone the Repository**  
If you haven't already, clone this repository using Git:  
```bash
git clone https://github.com/Alfred336/CRUDPHP.git
cd CRUDPHP
```
If you don’t have Git, you can download the ZIP file from GitHub and extract it manually.  

---

### **3. Start XAMPP**  
Start Apache and MySQL using the terminal:  
```bash
sudo /opt/lampp/lampp start
```
Or using systemd (if applicable):  
```bash
sudo systemctl start apache2
sudo systemctl start mysql
```

---

### **4. Configure the Database**  
1. Open **phpMyAdmin** by visiting:  
   ```
   http://localhost/phpmyadmin/
   ```
2. Create a new database named **`crudphp`**.  
3. Import the database structure from the provided `crudphp.sql` file:  
   - Click on **Import**  
   - Select `crudphp.sql`  
   - Click **Go**  

---

### **5. Configure Database Connection**  
Edit the `connect.php` file and update the database credentials:  
```php
<?php
$host = "localhost"; 
$user = "root"; // Change if you have a MySQL password
$password = ""; // Set your password if applicable
$database = "crudphp";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

---

### **6. Run the Project**  
1. Move the project to the XAMPP htdocs directory (if needed):  
   ```bash
   sudo mv CRUDPHP /opt/lampp/htdocs/
   ```
2. Open your browser and visit:  
   ```
   http://localhost/CRUDPHP/
   ```

---

## **Usage**  
- **Create** a new record using the form.  
- **View** all records in the table.  
- **Update** existing records.  
- **Delete** records permanently.  

---

## **Troubleshooting**  
- If Apache or MySQL fails to start, run:  
  ```bash
  sudo /opt/lampp/lampp restart
  ```
- If database connection fails, ensure MySQL is running:  
  ```bash
  sudo systemctl start mysql
  ```
- If permissions issue occurs, change ownership:  
  ```bash
  sudo chown -R www-data:www-data /opt/lampp/htdocs/CRUDPHP
  ```

---

## **Contributing**  
If you'd like to improve the project, feel free to fork the repository and submit a pull request.  

---

## **License**  
This project is open-source. You are free to modify and distribute it as needed.  
