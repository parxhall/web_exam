# **Web Technologies**
# Solent University Unit Code: CDA404
# *By Paris Hall*
## Background 
### The current system in place for renting IT equipment is very manual and is all reliant on the IT department inputting data and checking dates. Most of these requests come via email but they can be verbal communication in person or over the phone so it leaves all responsibility on the IT department where there is potential human error. With a new system we could have users request their own equipment and have traceable confirmations and a reliable audit trail. Currently the system operates off SharePoint and is manually entered into the calendar; the system heavily relies on the IT department to do a lot of the work and take all the responsibility.
### My website will allow users to request IT equipment in their own time and send push notifications to the IT department and send confirmations when the IT department have accepted the request, thus taking the responsibility off of the IT department. 
### I originally planned for my website to have four pages: 
+ A landing page, for users to navigate between other pages
+ A request page where customers will fill out a form
+ An inventory page for the IT department to confirm and track requests - this page is password protected (password = "1")
+ A contact page for details where customers can get help
### During implementation I added an additional page where customers could view and track previous and future requests. I realised this portal wouldn’t work without a login so my next step would be to create user profiles.
## Wireframes: 
### As part of the assignment I created some low fidelity wireframes that I used as a plan to create my website. These don’t match exactly to the final product as I found some challenges and issues with accessibility. I intended for my website to have four pages with one containing a tab, but in my final product I added another page where the customer could view previous requests, which also contains a tab.
## Desktop Wireframes
### This is my intended landing/home page.
![wireframe](assignment/img/dt_home_page.PNG)
### This is the request page.
![wireframe](assignment/img/dt_request.PNG)
### This is the inventory page for the IT department to view a calendar of requests.
![wireframe](assignment/img/dt_inventory_p1.PNG)
### This is the second tab in the inventory page which is a table of requests.
![wireframe](assignment/img/dt_inventory_p2.PNG)
### This is the contact page for customers to reach the IT department with any issues.
![wireframe](assignment/img/dt_contact_us.PNG)
## Mobile Wireframes
### Below are the mobile wireframes for my website.
![wireframe](assignment/img/m_home_page.PNG)
![wireframe](assignment/img/m_request.PNG)
![wireframe](assignment/img/m_inventory_p1.PNG)
![wireframe](assignment/img/m_inventory_p2.PNG)
![wireframe](assignment/img/m_contact_us.PNG)
### I also went one-step further and created a prototype of my website wireframes in Figma. [Figma Wireframes.](https://www.figma.com/file/L5oKf7u1PZHTiidpx5uWpW/Web-Tech)
## Colour Choices: 
### I conversed with my IT department on what colour scheme would fit with the company and found NETSCC have a blue theme. I tried to keep the website simple but modern and used a very small range of colours including blue, white and black and a relevant picture to modernise the look, I got the uncopyright image from [Unsplash.](https://unsplash.com/)
## Accessibility:
### To conform to accessibility rights I had to:
- Use alternate text for images
- Use keyboard inputs 
- Transcript for audio
- Make content easier to see and hear
### My website mostly conformed to these rules however in my original design for the landing page the was writing was placed over a picture, I realised this isn't great for users who need visual aid so I had to change this in my final design. I looked into making my website keyboard accessible and found some Javascript but realised I can use the tab button and enter in a chrome browser. I didn’t use any images in my HTML, but I used background images in my CSS for aesthetic value, I believe this doesn’t need to contain alternate text.
## GDPR & Distance Selling: 
### My company have a whole range of GDPR and Distance Selling rules and regulations they need to abide by which I read into. However I some of it wasn't relevant for my website as it will only be accessible by internal users so I researched more online and came up with my own guidance for the customer and attached this onto the landing page.
### General Data Protection Regulation (GDPR) is a guideline for how to keep data usage: fair/lawful, accurate, with a purpose, to the minimum, stored for a limited time, secure and accountable. It allows for the client to have certain rights including:
1. Right to be informed 
2. Right of access 
3. Right to rectification 
4. Right to erasure 
5. Right to restrict processing 
6. Right to data portability 
7. Right to object.
### Distance Selling is essentially when a customer buys a product without face-to-face contact with the seller, where there has been no opportunity to examine the product or discuss the terms of service. The customer has the right to return/withdrawal within 14 days free of charge.

## Evaluation
### My previous knowledge in web technologies was non-existent, and I have learnt a lot throughout this course including:
* How to create a range of different types of websites and objects in HTML 
* How to design and format a page with CSS
* Basic Javascript for validating forms and if else queries to display and hide tabs
* How to use markdown to write my report
### I think my original idea was quite complex which meant I had a lot of work and research to do. If I could go back I think I would change my original idea, but I do feel I overcame the challenges and created a great website. The main issue I set out to tackle was for the workload to be pushed back onto the business and this website allows for customers to request their own equipment, and also automates this request by sending out a very simple email to the IT department. 
### I believe my time management was great as I started creating my website when the assignment was set and have set little milestones when I need to have certain aspects finalised by. My first step was to create the wireframes, I used both low and high, and from there I would create the landing page and relevant files and references. Then I researched into the background, accessibility, GDPR & Distance Selling, before finally creating my website. I decided to take a desktop first approach as this is where I had the most experience and I would work out how to use a media query to enable mobile use. I used a media query that would change the format of the page for anything under 400px.
### I tried to keep my aliases clean so when it came to referencing in my CSS it would be easy and I could use it for all sheets saving me time on my code. I found some tips when creating large CSS files in which you alphabetically organise your stylesheet under each reference to save time when looking for a specific item when the page scales to a larger size. I researched that it is also a good idea to keep your stylesheets separate and an inexperienced user I liked this technique but I felt I repeated a lot of the same code.
### I have not yet created the backend for the website as it wasn't in the spec, therefore the request don’t yet go to other pages but I have set up all the tables for this to be easily implemented. I also researched into using a Google API to use my companies work login but found this rather difficult without using a database and thought it wasn't necessarily for my website to run but could add it in later on. My design changed from what I had planned originally due to accessibility it was difficult to comfortably view the landing page so I added a white box behind the text.
### After creation I trialed the website in some different environments. I have consistently used Chrome throughout designing so I know this worked well. I tested how the website looked and worked in Internet Explorer and the appearance was a match bar my home and contact us buttons in the banner had bullet point, I noted you first had to allow blocked content before aspects like tabs and password protect could work. Practically the form wasn't as great as Chrome as it didn't have a calendar and automatic time datatype for the cells, but it did automatically prompt you where information was essential, the email template the form sends is also not as well designed as Chrome. Edge worked very well in testing, it looked and worked exactly the same to Chrome but again the email template was blank, this would be my next step to fix. 
### I tried to version control all my work and you can find my GitHub Repository [here.](https://github.com/parxhall/web_exam)