# User Guide

This guide explains how to use the Movie Schedule web application to search for available movies by time and view movie details.

## 📍 Accessing the Website

1. Make sure your Raspberry Pi is powered on and connected to the network.
2. Open a web browser on your device (computer, tablet, phone).
3. Enter the Raspberry Pi’s IP address in the address bar:
<your-raspberry-pi-ip>/index.php
## 🎬 Homepage Features

On the homepage (`index.php`), you'll see:

- 🔽 A **dropdown menu** to select the time (e.g., 10:00, 14:00, etc.)
- 📸 A set of **movie posters** showing 5 available movies
- 🔍 A **search button** to find movies based on selected time
- 📄 Clicking on a movie poster takes you to a **movie detail page**

---

## 🕐 How to Search for Movies by Time

1. Use the dropdown to select a time (e.g., 15:00).
2. Click the **"Search"** button.
3. The system will show you the **next available movie** that starts at or after your selected time.
4. If no movie is available at or after that time, a message will be displayed.

---

## 📝 Example

- You select `13:00` → The system finds and shows a movie that starts at `14:00`.
- You select `20:00` → If there is no movie at or after 20:00, it will tell you “No movie found”.

---

## 🔗 Viewing Movie Details

- Each movie poster is clickable.
- Clicking a poster opens a page with more information about that movie (e.g., name, time, poster, description).

---
