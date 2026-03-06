[texting.md](https://github.com/user-attachments/files/25794757/texting.md)
AgriStack – Irish Potato Marketplace

Project Description

AgriStack is a web application that connects farmers with bulk buyers.
Farmers can post their potato harvest listings, buyers can request bulk orders, and administrators manage approvals and monitor activity.

The system is built using PHP, MySQL, JavaScript, and MVC architecture.

---

Features

- User authentication (Farmer, Buyer, Admin)
- Harvest listing management (CRUD)
- Bulk booking requests
- Order status tracking
- Dashboard statistics
- Admin audit log

---

System Roles

Farmer

- Create harvest listings
- Update listings
- Delete listings
- View booking requests

Buyer

- View harvest listings
- Request bulk bookings
- Track booking status

Admin

- Approve harvest listings
- Monitor orders
- View system statistics
- Manage users

---

Testing

The following test cases were used to verify that the system works correctly.

Test ID| Feature| Test Action| Expected Result| Actual Result| Status
TC01| Login| Enter correct email and password| User successfully logs in| Login successful| Pass
TC02| Login Validation| Enter wrong password| Error message displayed| Error shown| Pass
TC03| Create Listing| Farmer creates new potato listing| Listing saved in database| Listing created| Pass
TC04| Update Listing| Farmer edits listing price or quantity| Listing updated| Updated correctly| Pass
TC05| Delete Listing| Farmer deletes a listing| Listing removed from system| Removed| Pass
TC06| View Listings| Buyer opens listings page| All approved listings displayed| Listings shown| Pass
TC07| Booking Request| Buyer requests 200kg from listing| Booking request created| Created successfully| Pass
TC08| Price Calculation| Enter quantity and price| Total price automatically calculated| Correct total shown| Pass
TC09| Approve Listing| Admin approves farmer listing| Listing status becomes "Approved"| Status updated| Pass
TC10| Booking Status Update| Admin approves booking request| Booking status becomes "Approved"| Updated| Pass
TC11| Dashboard Statistics| Admin opens dashboard| System statistics displayed| Displayed correctly| Pass
TC12| Logout| User clicks logout button| User session ends and returns to login| Logout successful| Pass

---

Deployment

The project can be deployed using:

- InfinityFree
- 000webhost
- Render

---

Database Setup

1. Create a MySQL database.
2. Import the provided SQL schema.
3. Update the database configuration file.

Example configuration:

database: agristack
username: root
password: ""

---

Default Test Accounts

Farmer
email: farmer@test.com
password: 123456

Buyer
email: buyer@test.com
password: 123456

Admin
email: admin@test.com
password: 123456

---

Repository Structure

app/
  controllers/
  models/
  views/

config/
public/

docs/
  problem.md
  stakeholders.md
  user-stories.md
  testing.md

---

Contributors

Group Members – Advanced Web Design & Development
INES Ruhengeri:
Teta Clarisse ( Product Planner & Documentation Lead)
Waad Mohammed Ismail ( UI/UX Designer)
MOHAMED ABDELKAREEM OSMAN  TAHIR (HTML Structure Engineer)
Toony Yugusuk Emmanuel Lado ( CSS & Responsiveness Engineer)
Yassir Hassan Ali ( JavaScript Interaction Engineer)
Abdelsalam Habib Hassan ( Backend PHP MVC Engineer) group leader
Mohammad Ahmad  Mohammed Abdulmageed ( Database, Git & Deployment Engineer)
