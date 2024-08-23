# Collaborative OPEN SOURCE To-Do List Application

[![](https://mermaid.ink/img/pako:eNqNklFvgjAUhf9Kc5_VjIKgPCxR0elmlmVue1jZQydVmwElbcnmxP8-KLhojIk8ce75OIde2MFSRAx8WEuabdBLEKaovAbkVTH5gdrtWzTcTUXC0BNds33tDqt58cbZN3qh6ksVaEQCrrKYbtGcK43EqjY-jvlBFKHH5pECBWQkGdXMSBN-Ao8jrhtyQl6z6DIZsJg1ZoFm5EiWWA0G5hxjMhEyQYv8M-FKcZE2MWMTY8a6QFNSvaep0gIFVNNPqg6NUxN0R55ZxCVb6gr5X85_3aSuw5f68GkhPjkfT89K8VWtM0NN7eMNoJUUyVmefVXeyFD3pNlkNbo3owdiPs6cp6fz-aG5cWrvwXiTWsyNmIUptCBhMqE8Kn-9XWWGoDcsYSH45W3EVjSPdQhhui9Rmmux2KZL8LXMWQukyNcb8Fc0VqXKzfYCTstfODkgGU3fhTiW4O_gB3zbwR3PcR2v62DH7brdFmzBt9yO5Vmu1fdsp9ezrL6zb8GvCbA6NyXsubiPrW7Pxj17_wc-ofk8?type=png)](https://mermaid.live/edit#pako:eNqNklFvgjAUhf9Kc5_VjIKgPCxR0elmlmVue1jZQydVmwElbcnmxP8-KLhojIk8ce75OIde2MFSRAx8WEuabdBLEKaovAbkVTH5gdrtWzTcTUXC0BNds33tDqt58cbZN3qh6ksVaEQCrrKYbtGcK43EqjY-jvlBFKHH5pECBWQkGdXMSBN-Ao8jrhtyQl6z6DIZsJg1ZoFm5EiWWA0G5hxjMhEyQYv8M-FKcZE2MWMTY8a6QFNSvaep0gIFVNNPqg6NUxN0R55ZxCVb6gr5X85_3aSuw5f68GkhPjkfT89K8VWtM0NN7eMNoJUUyVmefVXeyFD3pNlkNbo3owdiPs6cp6fz-aG5cWrvwXiTWsyNmIUptCBhMqE8Kn-9XWWGoDcsYSH45W3EVjSPdQhhui9Rmmux2KZL8LXMWQukyNcb8Fc0VqXKzfYCTstfODkgGU3fhTiW4O_gB3zbwR3PcR2v62DH7brdFmzBt9yO5Vmu1fdsp9ezrL6zb8GvCbA6NyXsubiPrW7Pxj17_wc-ofk8)

## Project Structure

- `/htdocs`
  - `/css`: Contains CSS files
  - `/js`: Contains JavaScript files
  - `/templates`: Contains reusable header and footer templates
  - `/tasks`: Contains task-related PHP files for CRUD operations
  - `index.php`: Main landing page
  - `config.php`: Database configuration

## Setup Instructions

1. Copy the project to your local server (e.g., XAMPP, WAMP).
2. Import the `todo_db.sql` database file to your MySQL server.
3. Update `config.php` with your database credentials.
4. Access the project in your browser.


## How to Contribute

1. **Fork the Repository**: Create a personal fork of the repository on GitHub.
2. **Clone the Repository**: Clone the forked repository to your local machine.
    ```bash
    git clone <your-forked-repo-url>
    ```
3. **Create a Branch**: Create a new branch for your feature or issue.
    ```bash
    git checkout -b feature-name
    ```
4. **Make Changes**: Implement your changes or feature.
5. **Commit Changes**: Commit your changes.
    ```bash
    git add .
    git commit -m "Your descriptive commit message"
    ```
6. **Push Changes**: Push your changes to your forked repository.
    ```bash
    git push origin feature-name
    ```
7. **Create a Pull Request**: Create a pull request on the original repository.



## Challenge for Students

### Task 1: User Authentication

**Create a basic user authentication system to allow users to register and log in.**

#### Steps:

1. **Create Registration Page (`register.php`)**:
    - Form fields: Username, Email, Password, Confirm Password
    - Validate inputs
    - Hash passwords before storing
    - Store user information in the database

2. **Create Login Page (`login.php`)**:
    - Form fields: Username/Email, Password
    - Validate inputs
    - Check credentials against the database
    - Start a session on successful login

3. **Update `config.php`**:
    - Include `session_start();`

4. **Protect Page Access**:
    - Ensure users must be logged in to access the `index.php` and CRUD operations.

#### Submission:

- Once you have completed this task, create a pull request with the implemented user authentication system.
- Make sure to test all scenarios (e.g., incorrect login, registration validation errors).

---

### Upcoming Tasks

- **Task 2: Task Deadline**
- **Task 3: Task Categories**
- **Task 4: Task Status**
- **Task 5: UI/UX Improvements**
- **Task 6: Search Functionality**
- **Task 7: Sort Tasks**
- **Task 8: Security Improvements**
- **Task 9: Documentation Enhancement**
- **Task 10: Unit Tests**

## Technologies Used

- PHP
- MySQL
- HTML/CSS
- JavaScript

## Credits

For Students by Students.
