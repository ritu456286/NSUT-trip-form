
# Trip Form

## Overview

The "Trip Form" project is a web application designed to collect details of college students interested in a college trip. It uses PHP, HTML, CSS, and a GIF animation to create a user-friendly form where students can submit their information. The collected data is stored in a MySQL database using phpMyAdmin.

## Features

- User-friendly form for collecting student details.
- Data validation to ensure accurate information.
- Data is stored in a MySQL database for later access.
- A "thank you" page is displayed upon successful submission.
- Includes a GIF animation for visual appeal.
- Easily customizable and extendable for future improvements.

## Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) or a similar local web development environment.
- A web browser for viewing and testing the application.

## Installation

1. Download and install XAMPP if you don't have it already.

2. Clone or download the project from the GitHub repository.

3. Copy the project folder to the `htdocs` directory in your XAMPP installation folder.

4. Import the MySQL database using phpMyAdmin:
   - Create a new database (e.g., `trip_form_db`).
   - Import the SQL file (`trip.sql`) included in the project folder. Use phpMyAdmin to perform the import.

5. Start the Apache and MySQL servers using the XAMPP control panel.

6. Open a web browser and access the project at `http://localhost/tripForm`.

## Usage

1. Open your web browser and access the project using the URL: `http://localhost/tripForm`.

2. Fill out the form with your details, including name, age, email, mobile number, and any comments.

3. Click the "Submit" button to submit your information.

4. If the submission is successful, you will be redirected to the "thank you" page.

## Folder Structure

- `index.php`: The main page that contains the form for collecting student details.
- `thankyou.html`: The "thank you" page displayed upon successful submission.
- `style.css`: CSS file for styling the web pages.
- `giphy.gif`: GIF animation for visual appeal.
- `trip.sql`: SQL file for creating the database structure and initial data.

## Contributing

Contributions are welcome. Feel free to fork the project and submit pull requests to suggest improvements or add new features.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Author

- RITU KANSAL

## Acknowledgments

Special thanks to the open-source community and [XAMPP](https://www.apachefriends.org/index.html) for providing the tools to develop and test this project.

---
