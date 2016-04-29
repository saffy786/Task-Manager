<h1>Task Manager</h1>
<p>Sarfraz Ali - U1267493</p>

<h2>Site Details</h2>
<p><a href="https://selene.hud.ac.uk/u1267493/Task-Manager/">https://selene.hud.ac.uk/u1267493/Task-Manager/</a></p>
<p>User 1 username: saffy</p>
<p>User 1 password: saffy</p>

<p>User 2 username: tom</p>
<p>User 2 password: tom</p>

<p>I have created a Task Manager using ‘CodeIgniter”. The features that have been included in the website are:</p>
<ul>
<li>Register</li> <p>Use of Validation</p>
<li>Login</li> <p>Use of Validation</p>
<li>Add a task</li>
<li>Update a task</li>
<li>Delete a task</li>
<li>View a task </li>
<li>Active record</li>
<li>Sets Ascending order by Due_date</li>
<li>Displays the date and time of each task when added</li>
<li>Added filter function for task progress with Ajax</li>
<li>Displays results for each task when filtered by task progress the results found will display</li>
<li>Search functionality with displaying number of results and showing each task status with correct colour co-ordinate</li>

</ul>

<p>The advance feature that I have included is to set an active record that gets the date from database and if the due date is less than the date 3 days from now it displays the task. Also another feature that I have added is that it colour grades each task to its specific colour for example if the task is ‘Ready’ it will turn green if the task is ‘Not Started’ it will turn Red. </p>

<h1>How task manager works</h1>
<p>This task manager process by registering an account and then logging in. A user can add/update/delete/view/set a task, but the user can only see their tasks. The tasks will change colour if the upcoming deadlines are closer by day. For example another user logs in they will not be able to see anyone else’s tasks apart from the once they have set them self’s on their account.</p>

<h1>Framework used – CodeIgniter</h1>
<p>CodeIgniter is an open source PHP framework that underpins the Models, Views, Controllers (MVC). You can develop a website and customise your own needs by using this framework as it’s an open source and simple to configure also much faster and easier to use and user friendly. CodeIgniter contains a grab bag of libraries, helpers, plug-ins and many other resources that deals with complex functions in PHP.</p>

<h1>Installation - Instructions</h1>

<p>The process includes by opening up the application/config/config.php text editor file and then set your base URL. As I have used encryption and session then you will have to set your encryption key.</p1>

<p>For the database you will need to go to application/config/database.php open text editor file and set the database location such as (hostname/database/username/password).</p1>
