<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script  type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
  
</script>

</head>

<body>

<div id="container">
  
    <?php include('left-link.php'); ?>
    <div class="middle-pannel">
      <div class="theory">
         <h1 align="center">FILE SYSTEMS AND LOGGING IN</h1>
        <h2>1. File System</h2>
         <p>The Unix file system includes directories containing files and directories, each directory of which can contain yet more files and directories. Our own home directory, however, probably doesn't contain any directories (except . and .. ofcourse), which prevents us from exploiting what we call the virtual file cabinet of the file system.
</p>
<p>Managing  filesystems  is  one  of  the  important  tasks  of  Systems  Administrator.  Unix  filesystems  when  originally designed  to favor its  users.  Unix  filesystems  look  like  an  inverted tree,  so  that  a  root  is  at top and  then  branches underneath it. Major tasks for Systems administrators are: </p>
<p><strong>Tasks</strong></p>
<ul>
  <li>Making files available to users.</li>
  <li>Managing and monitoring the system's disk  resources.</li>
  <li>Protecting against file corruption, hardware  failures, user errors through backup.</li>
  <li>Security of these filesystems, what users need  and have access to which files.</li>
  <li>Adding more disks, tape drives, etc when needed.</li>
</ul>
<div id="201"></div>
<!--<a name='chap201'></a>-->
<p>When Unix operating systems is intalled, some directories  depending upon the Unix being installed are creaed under / (or root) , such as /usr  /bin /etc /tmp /home /var. As we can attach many disks to Unix  operating systems, it is recommended that  when working in professional environment / and /usr /home are on separate  disks.<br />
  </p>
<p>Same time the files are organized into a  tree structure with a  root   named by the character '/'. The first few levels of the tree look like  this:</p>


<blockquote>
  <blockquote>
    <blockquote>
      <p align="center"><img src="images/rootpicture.jpg" alt="" width="317" height="112" /></p>
    </blockquote>
  </blockquote>
</blockquote>
<p><strong>We will have a look on each and every file or directory in this hierarchy:</strong></p>

<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="73" valign="top"><p>etc</p></td>
    <td width="565" valign="top"><p>Contains all system configuration files and the files which maintain    information about users and groups.</p></td>
  </tr>
  <tr>
    <td width="73" valign="top"><p>bin</p></td>
    <td width="565" valign="top"><p>Contains all binary executable files (command that can be used by    normal user also)</p></td>
  </tr>
  <tr>
    <td width="73" valign="top"><p>usr</p></td>
    <td width="565" valign="top"><p>Default directory provided by Unix OS to create users home    directories and contains manual pages</p></td>
  </tr>
  <tr>
    <td width="73" valign="top"><p>tmp</p></td>
    <td width="565" valign="top"><p>System or users create temporary files which will be removed when the    server reboots.</p></td>
  </tr>
  <tr>
    <td width="73" valign="top"><p>dev</p></td>
    <td width="565" valign="top"><p>Contains all device files i.e. logical file names to physical    devices.</p></td>
  </tr>
  <tr>
    <td width="73" valign="top"><p>devices</p></td>
    <td width="565" valign="top"><p>Contains all device files i.e. physical names of physical devices</p></td>
  </tr>
  <tr>
    <td width="73" valign="top"><p>home</p></td>
    <td width="565" valign="top"><p>Default directory allocated for the home directories of normal users    when the administrator don&rsquo;t specify any other directory.</p></td>
  </tr>
  <tr>
    <td width="73" valign="top"><p>var</p></td>
    <td width="565" valign="top"><p>Contains all system log files and message files.</p></td>
  </tr>
  <div id="202"></div><p>
  <tr>
    <td width="73" valign="top"><p>sbin</p></td>
    <td width="565" valign="top"><p>Contains all system administrator executable files (command which    generally normal users don&rsquo;t have</p></td>
  </tr>
</table>
     
      </div>
      <div class="theory">
        <h2><strong>2. How do  we login to Unix system?</strong></h2><br />
          We need to have an account created by unix administrator for  that particular system. For example if We want to login to  unix   systems  named <strong>will-1 </strong>,  open   up  a  new   session  to<strong> will-1</strong> and  at  prompt   enter  the  user   name  and password as supplied by  Administrator.<br />
  <strong>How to connect</strong><br />
          When We connect to a UNIX computer and when We log in  locally using a text-only terminal, We will see the prompt:<br />
  <strong>	Login:</strong><br />
          At this prompt, type  in the username and press the enter/return/   key. Remember that UNIX is case sensitive (i.e. Will, WILL and will are  all different logins). We should then be prompted for the password:<br />
  <strong>Login         :  will-1</strong><br />
  <strong>password :</strong><br />
          Type the password in at the prompt and press the  enter/return/  key. Note that the  password will not be displayed on the screen as we type it in.<br />
          If  We mistype  the   username  or  password   we  will  get   an  appropriate  message from   the  computer  and We   will  be presented  with   the <strong>login: </strong>prompt  again.   Otherwise  We  should   be  presented  with   a  shell  prompt   which  looks something like this:<br />
  <strong>$</strong><br />
          To log  out of a  text-based UNIX shell,  type   &quot;exit&quot; at the shell prompt   (or if that doesn't  work try  &quot;logout &quot;; if that doesn't work  press <strong>ctrl-d</strong>).</p>
        
        <h2><strong>3. Changing  the password</strong></h2><br />
The UNIX command to create/change the password is <strong><em>Passwd</em></strong>:<br />
<strong>$ passwd</strong><br />
The system will prompt us for our old password, then for our  new password.  To eliminate any  possible   typing errors we have made in our new password, it will ask We to  reconfirm our new password.<br />
Remember the following points when choosing our password:</p>
        <ul>
          <li>Avoid characters which might not appear on all  keyboards, e.g. '£'.</li>
          <li>Make it at least 7 or 8 characters long and try  to use a mix of letters, numbers and punctuation.</li>
        </ul>
        <p>Note: One of the things we should do when we log in for the  first time is to change our password.</p>
        <h2><strong>4.  File Types</strong></h2>          
          <p>&nbsp;</p>
          <p>There are four types of files in the Unix file system.<br />
          </p>
          <p><strong>4.1.  Ordinary Files</strong><br />
          An ordinary file may contain text, a program, or other data.  It can be either an ASCII file, with each of its bytes being in the numerical  range 0 to 127, i.e. in the 7-bit range, or a binary file, whose bytes can be  of all possible values 0 to 255, in the 8-bit range.<br />
          </p>
          <p><strong>4.2.  Directory Files</strong><br />
          Suppose that in the directory x we have a, b and c, and that  b is a directory, containing files u and v. Then b can be viewed not only as a  directory, containing further files, but also as a file itself. The file b  consists of information about the directory b; i.e. the file b has information  stating that the directory b has files u and v, how large they are, when they  were last modified, etc.<br />
          </p>
          <p><strong>4.3. Device  Files</strong><br />
          In Unix, physical devices (printers, terminals etc.) are represented  as ``files.'' This seems odd at first,   but it  really makes sense: This  way, the same read() and write() functions used to read and write real files  can also be used to read from and write to these devices.<br />
          </p>
        <p><strong>4.4. Link  Files</strong><br />
          Suppose we have a file X, and type<br />
          <strong>$ ln X Y</strong><br />
          If we then run <strong>ls </strong>,  it will appear that a new file, Y, has been created, as a copy of X, as if we  had typed<br />
          <strong>$ cp X Y</strong><br />
          However, the difference is the <strong>cp </strong>does create a new file, while <strong>ln </strong>merely gives an alternate name to an old file. If we make Y  using <strong>ln</strong>, then Y is merely a new  name for the same physical file X.</p>
          </p>
        <p><h2><strong>5. Creating  Directories and Files</strong></h2>
          <p><strong>5.1. Create  a File</strong></p>
          <p><strong>$ cat &gt;  file      Enter text and end with  ctrl-D</strong><br />
            <strong>$ vi  file         Edit   file  using the  vi   editor</strong><br />
          </p>
          <p><strong>5.2.  Display File Contents</strong><br />
            <strong>$ cat   file    display contents of  file</strong><br />
          </p>
          <p><strong>5.3. Make a  Directory</strong><br />
            <strong>$ mkdir   directory-name</strong><br />
          </p>
          <p><strong>5.4. Making  a sub Directory</strong><br />
          To create a directory (dir1) which is having child sub  directory(dir2) also in a single command.<br />
          <strong>$ mkdir –p dir1/dir2</strong><br />
          </p>
          <p><strong>5.5  Denoting Paths</strong><br />
          We can mention the SOURCE path of DESTINATION path in any  format as specified below</p>
          </p>
        <table border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="211" valign="top"><br />
            <p><strong> cd /</strong></td>
            <td width="427" valign="top"><p>go to the root directory</p></td>
          </tr>
          <tr>
            <td width="211" valign="top"><p><strong>cd</strong></p></td>
            <td width="427" valign="top"><p>go to your login (home) directory</p></td>
          </tr>
          <tr>
            <td width="211" valign="top"><p><strong>cd ~username</strong></p></td>
            <td width="427" valign="top"><p>go to username's login (home) directory not allowed in the Bourne    shell</p></td>
          </tr>
          <tr>
            <td width="211" valign="top"><p><strong>cd ~username/directory</strong></p></td>
            <td width="427" valign="top"><p>go to username's indicated directory</p></td>
          </tr>
          <tr>
            <td width="211" valign="top"><p><strong>cd ..</strong></p></td>
            <td width="427" valign="top"><p>go up one directory level from here</p></td>
          </tr>
          <tr>
            <td width="211" valign="top"><p><strong>cd ../..</strong></p></td>
            <td width="427" valign="top"><p>go up two directory levels from here</p></td>
          </tr>
          <tr>
            <td width="211" valign="top"><p><strong>cd /full/path/name/from/root</strong></p></td>
            <td width="427" valign="top"><p>change directory to absolute path named note the leading slash</p></td>
          </tr>
          <tr>
            <td width="211" valign="top"><p><strong>cd path/from/current/directory</strong></p></td>
            <td width="427" valign="top"><p>change directory to path relative to here. note there is no leading    slash</p></td>
          </tr>
        </table>
      </div>   
      
  </div>
    
    
    <div class="right-pannel">
    	<div class="ad1"></div>
        <div class="ad2"></div>
    </div>
</div>

</body>
</html>
