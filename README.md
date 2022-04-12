# Hack For Sri Lanka: Website

## Background

Team Facade's repository at "Hack for Sri Lanka" event hosted by [HackForTheGlobe.org](https://change-via-data.wixsite.com/hack-for-the-globe).

Contains...

- Template & theme designed for "HackForSriLanka" including a logo.
- Information about "HackfortheGlobe" and "HackforSriLanka", including the name of all participants of the hackathon.
- Power cut schedule group select page and results page
- Static pages with different UI elements for any future pages that need to be developed

## The Stack

- Backend built with Codeigniter v3.1.11 and PHP v8.0.0.
- Frontend built with Bootstrap v5.1.3.

## Development Setup

To get this running on your local machine install [XAMPP](https://www.apachefriends.org/index.html) for your respective OS.

> **Note**. Latest version of XAMPP on their website doesn't seem to work on M1 Macs. Install XAMPP from [here](https://sourceforge.net/projects/xampp/files/XAMPP%20Mac%20OS%20X/8.0.0/xampp-osx-8.0.0-0-installer.dmg/download) for M1 users.

After installing XAMPP, navigate to the "htdocs" folder which can be by default found on

- Windows at: `C:/xampp/htdocs`
- Mac at: `Applications/XAMPP/xamppfiles/htdocs`
  and create a folder named `hackforsrilanka_website`

To clone the repository, run:

    git clone https://github.com/hackfortheglobe/hackforsrilanka_website.git;


Open `application/config/config.php` and make sure the `$config['base_url']` is set to `http://localhost/hackforsrilanka_website`.
Modify the database parameters in the `application/config/database.php` file if you already have a db set up on your local machine, else keep it as it is.

Run `XAMPP Control Panel` and click on "Start all servers".

Finally open `http://localhost/hackforsrilanka_website` on your web browser, to view the project.

## To Do

- **Feature pages:** Add two seperate pages showcasing the features developed by Team Illuminati & Team Brainstorm.
- **Geolocalization:** Add an option to obtain current coordinates from the user, figure out their group, and show the relevant schedule.
- **Search by location:** Currently can only get the schedule by using the group letter, need to load district/grid substation names in select boxes and allow users to select their areas.
- **Contact:** Contact form needs to be set up with a recipient email address.
