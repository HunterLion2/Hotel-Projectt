# 🏨 Hotel Management System

Modern and user-friendly hotel reservation and management system. Developed with PHP using MVC architecture.

## 🚀 Features

### 📱 Frontend (User Panel)
- **Modern Design**: Modern UI/UX with glass morphism and gradient effects
- **Advanced Filtering**: Capacity, price and special feature filters
- **Room Features**: 
  - Non-smoking rooms
  - Disabled access
  - Romantic package options
  - Wi-Fi, TV, air conditioning, minibar
- **Responsive Design**: Compatible with all devices
- **Smooth Animations**: CSS animations and hover effects

### 🛠 Backend (Management System)
- **MVC Architecture**: Clean and organized code structure
- **Database Relations**: Foreign key relationships
- **Secure SQL**: Safe queries with prepared statements
- **Error Handling**: Comprehensive error management
- **Session Management**: Secure session control

## 🏗 Technical Features

### **Technology Stack**
```
Backend: PHP 8.4+
Database: MySQL 8.4+
Frontend: HTML5, CSS3, JavaScript
Framework: Custom MVC
Design: Bootstrap 5, Font Awesome
```

### **Database Structure**
```sql
- rooms-table (Room information)
- private-settings (Special features)
- reservations (Reservations)
- users (Users)
```

## 📦 Installation

### **1. Requirements**
```
- PHP 8.4 or higher
- MySQL 8.4 or higher
- Apache/Nginx
- Composer (optional)
```

### **2. Clone the Project**
```bash
git clone https://github.com/yourusername/hotel-management-system.git
cd hotel-management-system
```

### **3. Database Setup**
```bash
# Connect to MySQL
mysql -u root -p

# Create database
CREATE DATABASE hotel_db;

# Import SQL file
mysql -u root -p hotel_db < hotel-data.sql
```

### **4. Configuration**
```php
// app/Config/Database.php
define('DB_HOST', 'localhost:3307');
define('DB_NAME', 'hotel_db');
define('DB_USER', 'root');
define('DB_PASS', '');
```

### **5. Start the Server**
```bash
# PHP Built-in Server
php -S localhost:8000 -t public

# Or use Apache/Nginx
```

## 🎯 Usage

### **User Operations**
1. **Homepage**: `/` - Hotel introduction and general information
2. **Rooms**: `/rooms` - Room list and details
3. **Reservation**: `/reservation` - Room filtering and reservation
4. **Contact**: `/contact` - Contact form

### **Filtering Options**
```
✅ Number of guests (1-5+ people)
✅ Price range (max price)
✅ Non-smoking rooms
✅ Disabled access
✅ Romantic package
✅ Date selection
```

## 📂 Project Structure

```
Hotel-Project/
├── app/
│   ├── Controllers/
│   │   ├── Front/
│   │   │   ├── HomeController.php
│   │   │   ├── ReservationController.php
│   │   │   └── RoomController.php
│   │   └── Admin/
│   ├── Models/
│   │   └── HotelModel.php
│   ├── Core/
│   │   ├── BaseController.php
│   │   ├── Database.php
│   │   └── Route.php
│   └── Config/
├── views/
│   ├── front/
│   │   ├── home.php
│   │   ├── reservation.php
│   │   ├── room-details.php
│   │   └── olanaklar.php
│   └── layouts/
├── public/
│   ├── css/
│   ├── js/
│   ├── img/
│   └── index.php
└── hotel-data.sql
```

## 🎨 Design Features

### **Modern CSS**
- **Glass Morphism**: Transparent glass effects
- **Gradient Backgrounds**: Color transitions
- **Smooth Animations**: Smooth animations
- **Responsive Grid**: CSS Grid and Flexbox
- **Custom Fonts**: Google Fonts integration

### **UI/UX Elements**
- **Interactive Cards**: Hover effects
- **Modern Forms**: Advanced form design
- **Loading Animations**: Page transition animations
- **Mobile First**: Mobile-first design

## 🔧 API Endpoints

```php
GET  /                    # Homepage
GET  /rooms               # Room list  
GET  /room-details        # Room details
GET  /reservation         # Reservation page
POST /reservation         # Reservation process
GET  /olanaklar          # Hotel amenities
GET  /contact            # Contact page
```

## 🛠 Code Quality Features

### **Database Security**
```php
// Prepared statements for SQL injection prevention
$stmt = $this->db->prepare("SELECT * FROM rooms WHERE capacity >= ?");
$stmt->execute([$capacity]);
```

### **Error Handling**
```php
try {
    // Database operations
} catch (Exception $e) {
    error_log("Error: " . $e->getMessage());
    return [];
}
```

### **Advanced Filtering**
```php
// Multi-criteria filtering with special features
public function filterWithSpecialFeatures($capacity, $price, $noneSmoke, $disabledAccess, $romanticPacket)
```

## 📊 Database Schema

### **Main Tables**
```sql
rooms-table:
- id (Primary Key)
- room_name
- price
- capacity
- features (wifi, tv, climate, minibar)

private-settings:
- id (Primary Key)
- room_id (Foreign Key)
- none-smoke
- disabled-access
- romantic-package
```

## 🌟 Key Features Implementation

### **Smart Filtering System**
- Multi-criteria search (capacity + price + special features)
- Real-time results with AJAX
- User-friendly filter interface

### **Modern UI Components**
- Glass morphism cards
- Gradient backgrounds
- Smooth hover animations
- Responsive design patterns

### **Security Features**
- Prepared SQL statements
- Input validation
- Error handling
- Session management

## 🚀 Future Enhancements

- [ ] Admin panel development in progress
- [ ] Email notification system to be added
- [ ] Payment gateway integration planned
- [ ] Multi-language support
- [ ] Advanced booking calendar
- [ ] Customer review system

## 🤝 Contributing

1. Fork the project
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## 👨‍💻 Developer

**Cozgu** - [GitHub](https://github.com/HunterLion2)

## 📞 Contact

- 📧 Email: cozgurgil@gmail.com
- 🐛 Issues: [GitHub Issues](https://github.com/HunterLion2/hotel-management-system/issues)
- 💬 Discussions: [GitHub Discussions](https://github.com/HunterLion2/hotel-management-system/discussions)

## 🙏 Acknowledgments

- Bootstrap team for modern components
- Font Awesome for beautiful icons
- PHP community for secure coding practices
- Open source community for inspiration

## 📱 Screenshots

*Add screenshots of your application here*

---

⭐ **If you like this project, don't forget to give it a star!**
