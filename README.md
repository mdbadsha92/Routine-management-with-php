                                       Routine Management  System  for  Department of  
                                        Computer  Science  and  Engineering MBSTU

 **Whole project with database Google drive link:https://drive.google.com/open?id=0B1rTkGJf6RKGdE05M3c0MGFiNFk

**All information about the project given below also describe how to run it in your localhost


Introduction: 
This is a simple but effective web application for managing  class routine and class schedule directly by teacher, here every teacher
would be admin of this site and one super admin will manage the whole site.


Language:
We used html, CSS, java script for UI design mysql for database and php server side scripting language.
Framework: Bootstrap.

Feature:

Feature for students:---

(1)Student will  be able to know  all type of academic vacation from this site(like summer vacation, winter vacation, Eid vacation and another vacation with academic calendar).
(2) Students will be able to know permanent class routine from this site. 
(3)Students will be able to know updated class routine from this site. If any teacher change his class schedule the student will be known by this site.
(4)This site also send a email notification to every student(corresponding semester).if any teacher change his  class schedule.
 (5) Students will also be able to know  which teacher take which subject with subject details and teacher details.
(6)Data base keep the students information.

Feature for teachers:---

(1)Teacher is a admin of this page so teacher can customize the routine.
(2)Teacher can update his class time.
(3)This site will help teacher to show available class time in a week.
(4)If accidently any teacher input a class in a portion and it was previously block by any teacher then this site give a alert to the teacher.
(5)It gives flexibility to teacher for taking any class any available time in a week.
(6)For this site a teacher not need to contact any student, it directly connect to  every student.



What should the student?:
All student need to do registration  for get the email notification.



What should the teacher?:
Not need to do anything supper admin will give a user name and password for accessing admin panel.





How to use this site?:
We used here php Mysql, for this we need to install a xamp server to run this project in our pc. After install xamp server start Apache and Mysql in xamp control panel.
Then go to xamp install file where you install this. Paste whole project in htdocs folder. Also import all database file into Mysql  data base. Now run the project(http://127.0.0.1/projects/project/index.php). 
I think it will work.



All folder in project folder: 
Bootstrap: Bootstrap framework folder contains with html, CSS , and java script.

Dist: user define CSS, java script.

Img: All type image.

Pages: Collection of  All forms and table.

Plugin: Extra feature define here, like calendar.

S_pages: Collection of All general pages.



All pages use in this project:

index.php, admin.php, advanced.php, course.php, coursein.php, teacher.php, 1y1s.php, 1y2s.php.....  4y2s.php,  data.html, eid-ul-adha-vacation.html, eid-ul-fitor-vacation.html, exam_notice.html, exam_result.html, exam_routine.html, mid_semester_break.html, new_notice.html, previous_notice.html, semester_end.html, semester_start.html, summer_vacation.html, winter_vacation.html.

index.php(user panel): 
First page after open project. Here  is a main menu where you want to go. It is for user panel. If user click student registration then advanced.php from will come for registration if all data is fill up and email is valid then it would be submit otherwise it show error message.

In Routine two option is updated class routine and class routine class routine page(data.html) show you permanent class routine of all semester. And updated class routine show you all individual semester certain week class submitted by every teacher in every semester pages(1y1s.php, 1y2s.php.....  4y2s.php) 

In sent mail (under construction) user able to send mail to admin.

MBSTU HOME if user click here then he/she directly  go to uv site.

Username and password portion for admin if user name and password is match then it   enter into the admin panel after click login button.

Notice portion show notice given by department.

Exam portion contain exam result and exam routine.

Semester portion contain all information about semester like end, start, vacation.

Footer portion contain by the name by designer and developer.



Admin.php(admin panel):
After enter into admin panel. Here is also a  main menu. Home same as user panel without username password portion but here one logout button it brings admin to user panel after click on logout button.
In registration with two option teacher registration and course registration. If click on teacher registration one form will come, after fill up this form click submit button it store every teacher information in a data base table. If click on course registration one from will come fill up this from then save it will save database table and also show html table in all semester individual page in teacher and course portion.


In routine portion like as user panel except on option routine submission if click on routine submission one form will come select all option and click save it update the updated class routine in every semester page and also send a mail to every student (corresponding semester). 
If any invalid portion is select, like a portion is already select by another teacher it will show  alert message.
Mailbox receive the mail send by any user(under construction).


Database:
We use here two database one db_cse here store all from data input By project. Another database for admin panel user. 

Conclusion: we are trying our best to make it suitable but as a first web project and beginner level project it was very difficult.

 
 
 
                                        
 
